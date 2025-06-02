@include('layouts.header')

<style>
    .payment-container {
        max-width: 700px;
        margin: 40px auto;
        padding: 30px;
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
        background-color: #fff;
    }

    .payment-container h4 {
        color: #28a745;
        text-align: center;
    }

    .payment-container .receipt-box {
        margin-top: 20px;
        font-size: 15px;
        line-height: 24px;
        color: #333;
    }

    .receipt-box table {
        width: 100%;
        border-collapse: collapse;
    }

    .receipt-box table th,
    .receipt-box table td {
        padding: 10px;
        border: 1px solid #ddd;
    }

    .receipt-box table th {
        background-color: #f8f9fa;
        text-align: left;
        width: 40%;
    }

    .btn-download {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 6px;
        text-align: center;
    }

    .btn-download:hover {
        background-color: #218838;
    }
</style>

<div class="payment-container">
    <h4>Payment Successful !!</h4>
    <p class="text-center">Your booking has been confirmed. Below is your payment receipt.</p>

    <div class="receipt-box">
        <table>
            <tr>
                <th>Transaction Code</th>
                <td>{{ $payment->transaction_code }}</td>
            </tr>
            <tr>
                <th>Booking ID</th>
                <td>{{ $payment->booking_id }}</td>
            </tr>
            <tr>
                <th>User</th>
                <td>{{ $payment->user->name ?? 'Guest' }}</td>
            </tr>
            <tr>
                <th>Payment Method</th>
                <td>{{ ucfirst($payment->method) }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ ucfirst($payment->status) }}</td>
            </tr>
            <tr>
                <th>Payment Date</th>
                <td>{{ $payment->payment_date->format('Y-m-d H:i A') }}</td>
            </tr>
            <tr>
                <th>Total Amount</th>
                <td>Rs. {{ number_format($payment->payment, 2) }}</td>
            </tr>
        </table>

        <div class="text-center">
            <a href="{{ route('receipt.download', $payment->id) }}" class="btn-download">
                Download PDF Receipt
            </a>
        </div>
    </div>
</div>