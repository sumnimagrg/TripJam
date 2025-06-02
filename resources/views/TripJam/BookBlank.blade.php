@extends('layouts.main')
@section('container')
<!-- Tour Booking Start -->
<div class="container-fluid booking py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">Booking</h5>
                <h1 class="text-white mb-4">Online Booking</h1>
                <p class="text-white mb-4">Welcome to TripJam! Organizing your trip is easy, quick, and convenient using
                    our online bus booking system. With a few clicks, you can book your seats, explore routes, check
                    schedules and enjoy safe payments.</p>
                <p class="text-white mb-4">Our system offers real-time availability, route options, and secure payment to
                    ensure a smooth travel planning experience.</p>
            </div>

            <div class="col-lg-6">
                <h1 class="text-white mb-3">Book Your Seats and Bus</h1>
                <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure Trip
                    With TripJam. More deals available every week.</p>

             <form method="POST" action="#">
    @csrf

    <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>
    <input type="email" name="email" class="form-control mb-3" placeholder="Your Email" required>
    <select name="bus_id" class="form-control mb-3" id="busSelect" required>
        <option value="">Select a Bus</option>
        @foreach ($buses as $bus)
            <option value="{{ $bus->id }}" data-route="{{ $bus->routes->first()->route_name ?? 'N/A' }}">
                {{ $bus->busName }} ({{ $bus->type }})
            </option>
        @endforeach
    </select>

      <select name="route_id" id="routeSelect" class="form-control mb-3" required>
        <option value="">Select Route</option>
        @foreach ($routes as $route)
            <option value="{{ $route->id }}">{{ $route->route_name }}</option>
        @endforeach
    </select>

    <input type="date" name="bookingDate" class="form-control mb-3" required>
    <input type="text" name="seatSelected" class="form-control mb-3" placeholder="Seat">
    <input type="text" name="fare" class="form-control mb-3" placeholder="Fare">
    <textarea name="message" class="form-control mb-3" placeholder="Special Request"></textarea>

    <button type="submit" class="btn btn-warning">Book Now</button>
</form>

{{-- <script>
    document.getElementById('busSelect').addEventListener('change', function () {
        let routeName = this.options[this.selectedIndex].getAttribute('data-route');
        document.getElementById('routeDisplay').value = routeName;
    });
</script> --}}

            </div>
        </div>
    </div>
</div>
<!-- Tour Booking End -->
@endsection
