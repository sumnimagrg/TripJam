<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            margin: 20px;
        }

        .receipt-box {
            max-width: 600px;
            margin: auto;
            border: 1px solid #eee;
            padding: 20px;
            font-size: 14px;
            line-height: 20px;
            color: #333;
        }

        .receipt-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .receipt-header h2 {
            margin: 0;
            font-size: 24px;
        }

        table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            margin-top: 10px;
        }

        table td {
            padding: 8px;
            vertical-align: top;
        }

        .total {
            font-weight: bold;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="receipt-box">
        <div class="receipt-header">
            <h2>Payment Receipt</h2>
            <p>Transaction Code: <strong>{{ $payment->transaction_code }}</strong></p>
        </div>

        <table>
            <tr>
                <td><strong>Booking ID:</strong></td>
                <td>{{ $payment->booking_id }}</td>
            </tr>
            <tr>
                <td><strong>User:</strong></td>
                <td>{{ $payment->user->name ?? 'Guest' }}</td>
            </tr>
            <tr>
                <td><strong>Payment Method:</strong></td>
                <td>{{ ucfirst($payment->method) }}</td>
            </tr>
            <tr>
                <td><strong>Status:</strong></td>
                <td>{{ ucfirst($payment->status) }}</td>
            </tr>
            <tr>
                <td><strong>Payment Date:</strong></td>
                <td>{{ $payment->payment_date->format('Y-m-d H:i A') }}</td>
            </tr>
            <tr class="total">
                <td><strong>Total Amount:</strong></td>
                <td>Rs. {{ number_format($payment->payment, 2) }}</td>
            </tr>
        </table>

        <div class="footer">
            Thank you for your payment.
        </div>
    </div>
</body>

</html>