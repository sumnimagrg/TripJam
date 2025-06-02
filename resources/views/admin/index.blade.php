@extends('admin.inc.main')
@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <style>
        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .card {
            background: linear-gradient(to bottom right, #e3f2fd, #90caf9);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #0d47a1;
        }

        .card p {
            font-size: 2rem;
            font-weight: bold;
            margin: 0;
            color: #1565c0;
        }
    </style>

    <div class="dashboard">
        <div class="card">
            <h3>Bookings</h3>
            <p>{{ $totalBookings }}</p>
        </div>
        <div class="card">
            <h3>Buses</h3>
            <p>{{ $totalBus }}</p>
        </div>
        <div class="card">
            <h3>Routes</h3>
            <p>{{ $totalRoutes }}</p>
        </div>
        <div class="card">
            <h3>Customers</h3>
            <p>{{ $totalCustomers }}</p>
        </div>       
    </div>
<div class="container mt-4">
    <h2 class="mb-4">User Bookings</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Bus</th>
                <th>Booking Date</th>
                <th>Seats</th>
                <th>Status</th>
                <th>Booked At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bookings as $index => $booking)
                <tr>
                    <td>{{ $index + $bookings->firstItem() }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->bus->name ?? 'N/A' }}</td>
                    <td>{{ $booking->booking_date }}</td>
                    <td>{{ $booking->seats_booked }}</td>
                    <td>
                        <span class="badge 
                            @if($booking->status == 'pending') bg-warning
                            @elseif($booking->status == 'confirmed') bg-success
                            @elseif($booking->status == 'cancelled') bg-danger
                            @endif">
                            {{ ucfirst($booking->status) }}
                        </span>
                    </td>
                    <td>{{ $booking->created_at->format('d M Y, H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">No bookings found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $bookings->links() }}
    </div>
</div>
</div>

@endsection
