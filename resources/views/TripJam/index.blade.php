@extends('layouts.main')
@section('container')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>One Platform, Endless Destinations.</h6>
                    <h2>From Here to There, We’ve Got You Covered.</h2>
                    <p>
                        Explore new destinations and revisit old favorites with our
                        all-in-one bus booking platform. <br />Your journey is our
                        priority, with efficient bookings, real-time updates,<br />
                        and a stress-free experience guaranteed.
                    </p>
                    <!-- <a href="#" class="btn theme_btn button_hover">Get Started</a> -->
                </div>
            </div>
        </div>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-3">
                        <h2>
                            Search For<br />
                            Your Ride
                        </h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Destination" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class="input-group date" id="datetimepicker11">
                                                <input type="text" class="form-control" placeholder="Arrival Date" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class="input-group date" id="datetimepicker1">
                                                <input type="text" class="form-control" placeholder="Departure Date" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="People">People</option>
                                                <option value="1">Individual</option>
                                                <option value="2">Group</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <a class="book_now_btn button_hover" href="#">Search</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->

    <!--================ Featured Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Featured Operators</h2>
                <p>
                    Driven by Excellence, Powered by Expertise – <br />Our Operators
                    Ensure Your Journey is Safe, Comfortable, and Always On Time!
                </p>
            </div>
            <div class="row">  <!-- Add a container for the row to hold multiple items -->
                @foreach ($drivers as $driver)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4"> <!-- Adjust the column size for different screens -->
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="{{ asset('uploads/'.$driver->image) }}" alt="" class="img-fluid" />
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">Name: {{$driver->name}}</h4>
                                <h4 class="sec_h4">Experience: {{$driver->experience}}</h4>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <!--================ Accomodation Area  =================-->
    <!-- Packages Start -->
    <section>
        <div class="container-fluid packages py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px">
                    <h1 class="mb-0">Awesome Services</h1>
                    <p>
                        Quality and well-serviced Buses!
                    </p>
                </div>
                <div class="packages-carousel owl-carousel owl-theme">
                    @foreach ($tryBus as $bus)
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ asset('uploads/'.$bus->image) }}" class="img-fluid w-100 rounded-top" alt="Bus Image" />
                            <div class="packages-info d-flex justify-content-between align-items-center position-absolute w-100"
                                style="bottom: 0; left: 0; z-index: 5; padding: 10px;">
                                <a href="2" class="fa fa-user me-2 btn-hover btn text-white py-2 px-4">{{$bus->capacity}} Seats</a>
                            </div>
                        </div>
                        <div class="packages-content bg-light p-4">
                            <p class="mb-2 font-weight-bold">{{$bus->busName}}</p>
                            <p class="mb-2 text-muted">{{$bus->driver->name}}</p>
                            <p class="mb-2">{{$bus->bus_no}}</p>
                            <p class="mb-2"><strong>Bus Type:</strong> {{$bus->type}}</p>
                            <p class="mb-2"><strong>Description:</strong> {{$bus->description}}</p>
                            <div class="mb-3">
                                <strong>Routes:</strong>
                                @foreach($bus->routes as $route)
                                    <p class="mb-1">{{$route->route_name}}</p>
                                @endforeach
                            </div>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-center px-0">
                                <a href="{{ route('book.bus', ['id' => $bus->id]) }}" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Packages End -->
    {{-- aboutus --}}
    <div class="about-container">
        <div class="about-header">
            <h1 class="about-title">About Us</h1>
            <p class="about-tagline">Your Journey, Our Priority</p>
        </div>
        
        <!-- Vision Section -->
        <div class="about-section">
            <div class="about-image-left">
                <img src="{{ asset('assets/image/about1.jpeg') }}" alt="Team discussing vision">
            </div>
            <div class="about-content-right">
                <h2 class="about-section-title">Our Vision</h2>
                <p class="about-section-text">
                    To provide seamless and reliable bus travel services. We ensure that passengers experience safe, comfortable, and hassle-free journeys. Our vision is to revolutionize transportation through smart and efficient booking solutions.
                </p>
            </div>
        </div>
    {{-- about us end --}}

    {{-- Testamonial --}}
    <div class="testimonial-container">
        <h2>What our customer's say's</h2>
        <h3>Happy Customers😊</h3>
        <div class="testimonials">
            <div class="testimonial-card">
                <img src="{{ asset('assets/image/client.png') }}" alt="Client" />
                <h3>“  Polite and Helpful Staff for a Pleasant Journey! ”</h3>
                <p>The bus staff was so polite and helpful. They made sure we had a pleasant trip. A big thumbs up!</p>
            </div>

            <div class="testimonial-card">
                <img src="{{ asset('assets/image/client1.png') }}" alt="Client" />
                <h3>“ Seamless Booking and Stress-Free Travel! ”</h3>
                <p>Everything was well-organized, from booking to boarding. No stress at all, just pure travel bliss!</p>
            </div>

            <div class="testimonial-card">
                <img src="{{ asset('assets/image/client2.png') }}" alt="Client" />
                <h3>“ Smooth, Timely, and Relaxing Journey! ”</h3>
                <p>Reached my destination on time, feeling fresh and relaxed. Such a hassle-free experience!</p>
            </div>

            <div class="testimonial-card">
                <img src="{{ asset('assets/image/client3.png') }}" alt="Client" />
                <h3>“ Need more bus options for night travel. ”</h3>
                <p>Hope you add more scenic routes because I’d love to explore more beautiful places with your service!</p>
            </div>
        </div>
    </div>
    
@endsection
