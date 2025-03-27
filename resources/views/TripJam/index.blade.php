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
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="{{ asset('assets/image/person1.jpg') }}" alt="" />
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Ali Shah</h4>
                        </a>
                        <div class="ratings">
                            <img src="{{ asset('assets/image/star (1).png') }}" alt="Star" class="star-icon" />
                            <span>4.2</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="{{ asset('assets/image/person2.jpg') }}" alt="" />
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Akash Shrestha</h4>
                        </a>
                        <div class="ratings">
                            <img src="{{ asset('assets/image/star (1).png') }}" alt="Star" class="star-icon" />
                            <span>5.0</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="{{ asset('assets/image/person3.jpg') }}" alt="" />
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Tanuj kumar</h4>
                        </a>
                        <div class="ratings">
                            <img src="{{ asset('assets/image/star (1).png') }}" alt="Star" class="star-icon" />
                            <span>4.5</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="{{ asset('assets/image/person4.png') }}" alt="" />
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Safal Khatri</h4>
                        </a>
                        <div class="ratings">
                            <img src="{{ asset('assets/image/star (1).png') }}" alt="Star" class="star-icon" />
                            <span>4.8</span>
                        </div>
                    </div>
                </div>
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
                        Quality and well serviced Buses!
                    </p>
                </div>
                <div class="packages-carousel owl-carousel">

                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ asset('assets/image/bus2.jpg') }}" class="img-fluid w-100 rounded-top"
                                alt="Image" />
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5">
                                <a href="seat.html"
                                    class="fa fa-user me-2 btn-hover btn text-white
                  py-2 px-4">37
                                    seates</a>
                            </div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Setra Bus</h5>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">
                                    Setra is a German bus brand of EvoBus GmbH. Setra buses are
                                    designed to be comfortable and flexible for long-distance
                                    travel. It have reclining seats with adjustable headresta and
                                    armrests. Large, tinted window provides clear, scenic views,
                                    ideal for comfortable and exciting journey.
                                </p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-center px-0">
                                    <a href="Book.html" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ asset('assets/image/bus4.jpg') }}" class="img-fluid w-100 rounded-top"
                                alt="Image" />
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5">
                                <a href="seat.html"
                                    class="fa fa-user me-2 btn-hover btn text-white
                  py-2 px-4">37
                                    seates</a>
                            </div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Coach Bus</h5>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">
                                    Coach Bus are gaining popolarity for their comfort,
                                    flexibility and adaptability to customer needs. Many modern
                                    feature individual screens, wifi and enhancing the passenger
                                    experience. Advanced air conditioning and heating system
                                    ensure a pleasant interior environment regardless of the
                                    weather.
                                </p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-center px-0">
                                    <a href="Book.html" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ asset('assets/image/bus5.jpg') }}" class="img-fluid w-100 rounded-top"
                                alt="Image" />
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5">
                                <a href="seat.html"
                                    class="fa fa-user me-2 btn-hover btn text-white
                  py-2 px-4">37
                                    seates</a>
                            </div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Toyota Coaster Deluxe</h5>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">
                                    Toyota Coaster Deluxe is a highly versatile and comfortable
                                    minibus, particulary popular for long tours and group travel.
                                    This model's focuses on comfort, safety and reliabilit makes
                                    it a preferred option for group travel services and for family
                                    planning trips. Look forward to a great experience with us.
                                </p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-center px-0">
                                    <a href="Book.html" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ asset('assets/image/bus3.jpg') }}" class="img-fluid w-100 rounded-top"
                                alt="Image" />
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5">
                                <a href="seat.html"
                                    class="fa fa-user me-2 btn-hover btn text-white
                  py-2 px-4">37
                                    seates</a>
                            </div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">MM Band Sleeper</h5>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">
                                    The seating and sleeping capacity of MM band sleeper bus can
                                    accomodate around 20-30 passenger where 8-12 passengers can
                                    sleep and rest 18 passenger can seat. This bus include
                                    showers, bathrooms, wifi, entertainment system with TVs and
                                    gourmet kitchenettes for meal.
                                </p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-center px-0">
                                    <a href="Book.html" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Packages End -->

    {{-- Testamonial --}}
    <div class="testimonial-container">
        <h2>What our customer's say's</h2>
        <h3>Happy Customers😊</h3>
        <div class="testimonials">
            <div class="testimonial-card">
                <img src="{{ asset('assets/images/person4.jpg') }}" alt="Client" />
                <h3>“  Polite and Helpful Staff for a Pleasant Journey! ”</h3>
                <p>The bus staff was so polite and helpful. They made sure we had a pleasant trip. A big thumbs up!</p>
            </div>

            <div class="testimonial-card">
                <img src="{{ asset('assets/images/person1.jpeg') }}" alt="Client" />
                <h3>“ Seamless Booking and Stress-Free Travel! ”</h3>
                <p>Everything was well-organized, from booking to boarding. No stress at all, just pure travel bliss!</p>
            </div>

            <div class="testimonial-card">
                <img src="{{ asset('assets/images/person2.jpeg') }}" alt="Client" />
                <h3>“ Smooth, Timely, and Relaxing Journey! ”</h3>
                <p>Reached my destination on time, feeling fresh and relaxed. Such a hassle-free experience!</p>
            </div>

            <div class="testimonial-card">
                <img src="{{ asset('assets/images/person3.jpeg') }}" alt="Client" />
                <h3>“ Need more bus options for night travel. ”</h3>
                <p>Hope you add more scenic routes because I’d love to explore more beautiful places with your service!</p>
            </div>
        </div>
    </div>
@endsection
