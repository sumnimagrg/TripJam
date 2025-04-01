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
                    <img src="{{ asset('assets/images/locationicon.jpg') }}" alt="Location" class="contact-info-icon">
                    <span class="contact-info-text">Ratnachowk, Pokhara-10, Nepal</span>
                </div>

                <div class="contact-info-item">
                    <img src="{{ asset('assets/images/phonenumber.jpg') }}" alt="Phone Number" class="contact-info-icon">
                    <span class="contact-info-text">Phone Number: 061/523548, 9815762764</span>
                </div>

                <div class="contact-info-item">
                    <img src="{{ asset('assets/images/mail.png') }}" alt="Email" class="contact-info-icon">
                    <span class="contact-info-text">manika.thapa.s23@icp.edu.np</span>
                </div>
            </div>

            <div class="contact-form-container">
                <form class="contact-form" action="{{ route('contact.sendEnquiry') }}" method="POST">
                    @csrf
                    <input type="text" name="name" class="contact-form-input" placeholder="Enter Your Name" required>
                    <input type="email" name="email" class="contact-form-input" placeholder="Enter Your Email Address"
                        required>
                    <textarea name="messageContent" class="contact-form-textarea" placeholder="Enter Messages" required></textarea>
                    <button type="submit" class="contact-form-button">Send Messages</button>
                </form>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
    @endsection
