@extends('layouts.main')
@section('container')
    <!-- Tour Booking Start -->
    <div class="container-fluid booking py-5">

        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h5 class="section-booking-title pe-3">Booking</h5>
                    <h1 class="text-white mb-4">Online Booking</h1>
                    <p class="text-white mb-4">Welcome to TripJam!Organizing your trip is easy, quick, and convcutenient using
                        our online bus booking system. With a few clicks, you can book your seats, explore routes, check
                        schedules and have safe payments.
                    </p>
                    <p class="text-white mb-4">An online booking system enables travelers to reserve seats on buses and can
                        also reserve mini bus on your long journey with your family and friends. This system offers
                        real-time schedules, routes and seat availability, ensuring hassle-free travel planning.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h1 class="text-white mb-3">Book Your Seats and Bus</h1>
                    <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure Trip
                        With TripJam. Get More Deal Offers Here.</p>
{{-- 
                    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif --}}
<form method="POST" action="{{ route('booking.submit', $buses->id) }}">
    @csrf
    <input type="text" name="name" class="form-control" placeholder="Your Name">
    <input type="email" name="email" class="form-control" placeholder="Your Email">
    <input type="text" class="form-control mb-3" value="{{ $buses->busName }}" readonly>
<input type="text" class="form-control mb-3" value="{{ $buses->routes->first()->route_name ?? 'N/A' }}" readonly>

    <input type="date" name="bookingDate" class="form-control" placeholder="Booking Date">
    <input type="text" name="seatSelected" class="form-control" placeholder="Seat">
    <input type="text" name="fare" class="form-control" value="{{ $buses->routes->first()->pivot->fare ?? 'N/A' }}">

    <textarea name="message" class="form-control" placeholder="Special Request"></textarea>
    <button type="submit"  class="btn btn-warning">Book Now</button>
    @if (session('success'))
                        <p style="color: green; margin-top: 10px;">{{ session('success') }}</p>

                        @if (session('payment_required') && session('booking_id'))
                            <div class="payment-notice" style="margin-top: 10px; color: red;">
                                <p>Your booking is <strong>not confirmed yet</strong>. Please complete your payment to confirm it.</p>
                                <a href="{{ route('payment.booking', ['booking_id' => session('booking_id')]) }}" class="btn btn-primary">Proceed to Payment</a>
                            </div>
                        @endif
                    @endif
</form>


                </div>
            </div>
        </div>
    </div>
    <!-- Tour Booking End -->
@endsection
