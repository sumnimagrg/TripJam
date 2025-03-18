@extends('layouts.main')
@section('container')
@extends('layouts.main')
@section('container')
<div class="container">
    <h6>Contact Us!</h6>
    
    <div class="contact-content">
        <div class="contact-info">
            <div class="hospital-name">MediConnect Hospital Pvt.Ltd</div>
            
            <div class="info-item">
                <img src="{{ asset('assets/images/locationicon.jpg') }}" alt="Location">
                <span>Amarsingh, Pokhara-10, Nepal</span>
            </div>
            
            <div class="info-item">
                <img src="{{ asset('assets/images/phonenumber.jpg') }}" alt="Phone Number">
                <span>Phone Number: 061/523548, 9815762764</span>
            </div>
            
            <div class="info-item">
                <img src="{{ asset('assets/images/mail.png') }}" alt="Email">
                <span>mediconnect@gmail.com</span>
            </div>
        </div>
        
        <div class="contact-form">
            <form>
                <input type="text" placeholder="Enter Your Name" required>
                <input type="email" placeholder="Enter Your Email Address" required>
                <textarea placeholder="Enter Messages" required></textarea>
                <button type="submit">Send Messages</button>
            </form>
        </div>
    </div>
</div>
@endsection