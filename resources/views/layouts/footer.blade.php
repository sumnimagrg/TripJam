<style>
    footer {
        background-color: #deded5;
        width: 100%;
    }

    footer h5 {
        letter-spacing: 2px;
        color: #14193f;
        font-weight: 600;
    }

    footer a {
        color: #4f4f4f;
        text-decoration: none;
    }

    footer a:hover {
        text-decoration: underline;
        color: #14193f;
    }

    .footer-bottom {
        background-color: rgba(0, 0, 0, 0.2);
        text-align: center;
        padding: 10px;
        color: #333;
        font-size: 14px;
    }

    .footer-table td {
        padding: 4px 8px;
        border: none;
    }

    @media (max-width: 768px) {
        .footer-cols {
            flex-direction: column;
            text-align: center;
        }
    }
</style>

<footer>
    <div class="container-fluid p-4">
        <div class="row footer-cols">
            <div class="col-lg-6 col-md-12 mb-4">
                <h5 class="mb-3">TRIPJAM</h5>
                <p style="text-align: justify;">
                    TripJam is a convenient bus booking system designed for hassle-free travel. It offers a variety
                    of routes, operators, and easy seat selection. With real-time tracking and secure payments,
                    you’re always in control. Enjoy flexible cancellations and 24/7 customer support. Whether it’s a
                    quick commute or a long trip, TripJam makes travel simple and reliable!
                </p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="mb-3">Product</h5>
                <ul class="list-unstyled">
                    <li class="mb-1"><a href="{{ url('/') }}">Home</a></li>
                    <li class="mb-1"><a href="{{ url('/services') }}">Services</a></li>
                    <li class="mb-1"><a href="{{ url('/booked') }}">Book Now</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="mb-3">Opening Hours</h5>
                <table class="footer-table">
                    <tbody>
                        <tr>
                            <td>Mon - Fri:</td>
                            <td>8am - 9pm</td>
                        </tr>
                        <tr>
                            <td>Sat - Sun:</td>
                            <td>8am - 2pm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        © {{ date('Y') }} Copyright:
        <a href="https://tripjam.com" class="text-dark">TripJam.com</a>
    </div>
</footer>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/mail-script.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('assets/vendors/nice-select/js/jquery.nice-select.js') }}"></script>
<script src="{{ asset('assets/js/mail-script.js') }}"></script>
<script src="{{ asset('assets/js/stellar.js') }}"></script>
<script src="{{ asset('assets/vendors/lightbox/simpleLightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
