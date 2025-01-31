@extends('layouts.main')
@section('container')
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
@endsection
