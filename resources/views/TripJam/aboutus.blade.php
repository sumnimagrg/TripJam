@extends('layouts.main')

@section('container')
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

    <!-- Mission Section -->
    <div class="about-section">
        <div class="about-content-left">
            <h2 class="about-section-title">Our Mission</h2>
            <p class="about-section-text">
                To simplify and enhance bus travel by offering a secure, efficient, and user-friendly booking platform. We strive to connect passengers with reliable transportation, ensuring comfort, affordability, and convenience at every step of their journey.
            </p>
        </div>
        <div class="about-image-right">
            <img src="{{ asset('assets/image/about2.jpg') }}" alt="Passengers on bus">
        </div>
    </div>

    <!-- Story Section -->
    <div class="about-section">
        <div class="about-image-left">
            <img src="{{ asset('assets/image/about3.jpeg') }}" alt="Founders">
        </div>
        <div class="about-content-right">
            <h2 class="about-section-title">Our Story</h2>
            <p class="about-section-text">
                Founded with a passion for making travel easier, our journey began with a simple idea to bridge the gap between passengers and reliable bus services. Recognizing the challenges of traditional ticket booking, we set out to create a seamless, efficient, and hassle-free platform. Today, we continue to innovate, ensuring every journey is smooth, safe, and stress-free.
            </p>
        </div>
    </div>
</div>
@endsection