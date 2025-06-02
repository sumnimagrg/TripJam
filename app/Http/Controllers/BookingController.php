<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Xentixar\EsewaSdk\Esewa;

class BookingController extends Controller
{
    /**
     * Show the booking form for a specific bus.
     */
    public function book($id)
    {
        $bus = Bus::with('routes')->findOrFail($id);

        $booking = session('booking_id')
            ? Booking::find(session('booking_id'))
            : null;

        return view('TripJam.Book', ['buses' => $bus]);
    }



    public function submitBooking(Request $request, $id)
    {
        // dd(Auth::check(), Auth::id(), Auth::user());
        $data = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email',
            'bookingDate'  => 'required|date',
            'seatSelected' => 'required|numeric',
            'fare'         => 'required|numeric',
            'message'      => 'nullable|string',
        ]);

        $booking = Booking::create([
            'user_id'       => Auth::id(),
            'bus_id'        => $id,
            'name'          => $data['name'],
            'email'         => $data['email'],
            'booking_date'  => $data['bookingDate'],
            'seats_booked'  => $data['seatSelected'],
            'fare'          => $data['fare'],
            'message'       => $data['message'] ?? null,
            'status'        => 'pending',
        ]);

        session([
            'booking_id'      => $booking->id,
            'payment_required' => true,
        ]);

        return redirect()
            ->route('book.bus', ['id' => $id])
            ->with('success', 'Booking submitted! Please proceed to payment.');
    }

    public function payment($booking_id)
    {
        $booking = Booking::findOrFail($booking_id);
        $transaction_id = strtoupper(bin2hex(random_bytes(5)));
        session(['transaction_id' => $transaction_id]);

        $esewa = new Esewa();
        $esewa->config(
            route('esewa.check'),
            route('esewa.check'),
            $booking->fare,
            $transaction_id
        );

        return $esewa->init();
    }
}
