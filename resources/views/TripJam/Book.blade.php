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
                    <form >
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-0" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-white border-0" id="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <label for="from">From:</label>
                                    <input type="text" class="form-control bg-white border-0" id="startLocation"
                                        value="{{ $buses->routes->first()->start_location }}" placeholder="Your Location">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    
                                    <label for="To">To:</label>
                                    <input type="endLocation" class="form-control bg-white border-0" id="end_location" name="end_location"  value="{{ $buses->routes->first()->end_location }}"
                                    placeholder="Your Location">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control bg-white border-0" id="bookingDate"
                                        placeholder="Booking Date">
                                    <label for="bookingDate">Booking Date</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="seatSelected" class="form-control bg-white border-0" id="seatSelected"
                                        placeholder="Your Seat">
                                    <label for="seatSelected">Your Seat: </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="busSelected" class="form-control bg-white border-0" id="busSelected"
                                        placeholder="Your Bus">
                                    <label for="busSelected">Your Bus: {{$buses->bus_no}}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <label for="fare">Fare:</label> 
                                    <input type="text" class="form-control bg-white border-0" id="fare" 
                                           value="{{ $buses->routes->first()->pivot->fare }}" 
                                           placeholder="Fare">
                                </div>
                            </div>
                            
                            
                            {{-- <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="busSelected" class="form-control bg-white border-0" id="busSelected"
                                        placeholder="Your Bus">
                                    <label for="busSelected">Seat For: {{$buses->bus_no}}</label>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="select1">
                                        <option value="1">Individual</option>
                                        <option value="2">Groups</option>
                                    </select>
                                    <label for="Categories">Seat:</label>
                                </div>
                            </div> --}}
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-white border-0" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary text-white w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Tour Booking End -->
@endsection
