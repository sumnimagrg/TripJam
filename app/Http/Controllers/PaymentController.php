<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Xentixar\EsewaSdk\Esewa;

class PaymentController extends Controller
{
    // Function to initiate the payment
    public function pay($booking_id)
    {
        $booking = Booking::findOrFail($booking_id);

        $transaction_id = strtoupper(bin2hex(random_bytes(5)));

        session(['booking_id' => $booking->id]);


        $esewa = new Esewa();
        $esewa->config(
            route('esewa.check'),
            route('esewa.check'),
            $booking->fare,
            $transaction_id
        );

        return $esewa->init();
    }

    // Function to handle the payment check after redirect
    public function check()
    {
        $esewa = new Esewa();
        $data = $esewa->decode(); // Decode response from eSewa

        if ($data && isset($data['status']) && $data['status'] === 'COMPLETE') {
            $booking_id = session('booking_id');

            if ($booking_id) {
                $booking = Booking::find($booking_id);

                if ($booking) {
                    // Save payment record
                    $payment = Payment::create([
                        'user_id'        => Auth::id(),
                        'booking_id'     => $booking_id,
                        'payment_date'   => now(),
                        'transaction_code' => $data['transaction_code'],
                        'payment'        => $booking->fare,
                        'status'         => 'completed',
                        'method'         => 'esewa',
                    ]);

                    // Update booking status
                    $booking->update(['status' => 'confirmed']);

                    //Reduce available seats from bus capacity
                    $bus = $booking->bus()->first(); // Load bus via relationship
                    if ($bus && is_numeric($bus->capacity)) {
                        $remaining = max(0, $bus->capacity - $booking->seats_booked); // Prevent negative
                        $bus->update(['capacity' => $remaining]);
                    }

                    session()->forget('booking_id');

                    return view('payment.success', [
                        'payment' => $payment,
                        'booking' => $booking,
                    ]);
                }
            }

            return redirect()->route('payment.failed')->with('error', 'Booking not found.');
        }

        return redirect()->route('payment.failed')->with('error', 'Payment failed or cancelled.');
    }
    public function downloadReceipt($paymentId)
    {
        $payment = Payment::with('user', 'booking')->findOrFail($paymentId);

        $pdf = Pdf::loadView('receipt.pdf', compact('payment'));

        return $pdf->download('payment_receipt_' . $payment->transaction_code . '.pdf');
    }
}
