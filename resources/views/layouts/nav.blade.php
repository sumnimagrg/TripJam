<!--================Header Area =================-->
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- <a class="navbar-brand logo_h" href="index.html"><img src="image/Tripjam.png" alt=""></a> -->
            <a class="navbar-brand logo_h" href="index.html">
                <img src="{{ asset('assets/image/Tripjam.png') }}" alt="Tripjam Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/availability">Availability</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Book">Book Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/payment">Payment</a>
                    </li>
                </ul>
            </div>
            @guest
            <div class="auth-buttons">
                <a href="login" button class="login-btn">Login</a>
                <a href="register" button class="signup-btn">Signup</a>
            </div>
            @endguest
            @auth
            <li class="nav-item
                    dropdown mx-5">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/image/person1.jpg') }}" alt="Profile" class="rounded-circle" width="40" height="40">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="profile">Profile</a></li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" 
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ 'Log Out' }}
                        </x-dropdown-link>
                    </form>
                </ul>
            </li>
        @endauth
        </nav>
    </div>
</header>
<!--================Header Area =================-->
