@extends('layouts.main')
@section('container')
<div class="contact-page-container">
    <div class="contact-page-header">
        <h1 class="contact-page-title">Contact Us!</h1>
    </div>
    
    <div class="contact-page-content">
        <div class="contact-info-container">
            <div class="contact-company-name">TripJam Pvt.Ltd</div>
            
            <div class="contact-info-item">
                <img src="{{ asset('assets/images/locationicon.jpg') }}" 
                     alt="Location" 
                     class="contact-info-icon">
                <span class="contact-info-text">Ratnachowk, Pokhara-10, Nepal</span>
            </div>
            
            <div class="contact-info-item">
                <img src="{{ asset('assets/images/phonenumber.jpg') }}" 
                     alt="Phone Number" 
                     class="contact-info-icon">
                <span class="contact-info-text">Phone Number: 061/523548, 9815762764</span>
            </div>
            
            <div class="contact-info-item">
                <img src="{{ asset('assets/images/mail.png') }}" 
                     alt="Email" 
                     class="contact-info-icon">
                <span class="contact-info-text">tripjam@gmail.com</span>
            </div>
        </div>
        
        <div class="contact-form-container">
            <form class="contact-form">
                <input type="text" class="contact-form-input" placeholder="Enter Your Name" required>
                
                <input type="email" 
                       class="contact-form-input" 
                       placeholder="Enter Your Email Address" 
                       required>
                
                <input type="text" 
                       class="contact-form-input" 
                       placeholder="Enter Subject" 
                       required>
                
                <textarea class="contact-form-textarea" 
                          placeholder="Enter Messages" 
                          required></textarea>
                
                <button type="submit" 
                        class="contact-form-button">Send Messages</button>
            </form>
        </div>
    </div>
</div>
@endsection