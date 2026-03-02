{{-- Top Info Bar --}}
<div class="topbar d-none d-md-block">
    <div class="container">
        <div class="topbar-inner d-flex align-items-center justify-content-between">
            <div class="topbar-contact d-flex align-items-center gap-4">
                <a href="tel:+91-9663595568" class="topbar-link">
                    <span class="topbar-icon"><i class="fa-solid fa-phone"></i></span>
                    <span>+91-9663595568</span>
                </a>
                <a href="mailto:needhelp@example.com" class="topbar-link">
                    <span class="topbar-icon"><i class="fa-solid fa-envelope"></i></span>
                    <span>needhelp@example.com</span>
                </a>
            </div>
            <div class="topbar-social d-flex align-items-center gap-3">
                <span class="topbar-social-label d-none d-lg-inline">Follow Us:</span>
                <a href="#" target="_blank" class="social-icon-btn" aria-label="Twitter">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#" target="_blank" class="social-icon-btn" aria-label="Facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#" target="_blank" class="social-icon-btn" aria-label="Instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" target="_blank" class="social-icon-btn" aria-label="LinkedIn">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Main Navbar --}}
<nav class="navbar navbar-expand-lg navbar-main" id="mainNavbar">
    <div class="container">

        {{-- Brand Logo --}}
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Webzyro Taxi" class="navbar-logo" />
        </a>

        {{-- Mobile Toggler --}}
        <button class="navbar-toggler-custom d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-bar"></span>
            <span class="toggler-bar"></span>
            <span class="toggler-bar"></span>
        </button>

        {{-- Nav Links --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto gap-lg-1">
                <li class="nav-item">
                    <a class="nav-link-custom {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-custom" href="#">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link-custom dropdown-toggle-custom" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Services <i class="fa-solid fa-chevron-down ms-1 chevron-icon"></i>
                    </a>
                    {{-- <ul class="dropdown-menu dropdown-custom">
                        <li><a class="dropdown-item-custom" href="#">All Services</a></li>
                        @foreach ($services as $service)
                        <li><a class="dropdown-item-custom" href="#">{{ $service->title }}</a></li>
                        @endforeach
                    </ul> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link-custom" href="#">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-custom" href="#">Gallery</a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link-custom" href="#">Contact Us</a>
                </li>
            </ul>

            {{-- CTA Button (visible inside collapse on mobile) --}}
            <div class="d-lg-none mt-3 mb-2">
                <a href="#" class="btn-cta-mobile">
                    <i class="fa-solid fa-arrow-up-right-from-square me-2"></i> Contact Us
                </a>
            </div>
        </div>

        {{-- CTA Button (desktop) --}}
        <div class="d-none d-lg-flex align-items-center gap-3">
            <a href="#" class="btn-cta">
                Contact Us <i class="fa-solid fa-arrow-up-right-from-square ms-2"></i>
            </a>
        </div>

    </div>
</nav>