<footer class="footer-section position-relative pt-5">
    <!-- Background Pattern -->
    <div class="footer-bg-pattern"></div>

    <div class="container position-relative z-index-2">
        <!-- Top Row -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <a href="{{ route('home') }}" class="footer-logo d-flex align-items-center gap-2 text-decoration-none">
                    <img src="{{ asset('assets/images/taxix-logo.png') }}" alt="Taxix Logo"
                        class="img-fluid footer-brand-img">
                    {{-- <span class="footer-brand-text text-white h3 mb-0 fw-bold">Taxix</span> --}}
                </a>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0 pe-lg-5">
                <p class="footer-intro-text text-muted mb-0">
                    Authoritatively simplify open-source resources via backend visualize business e-markets before
                    parallel dictumst aliquam
                </p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="footer-call-box d-inline-flex align-items-center gap-3">
                    <div class="footer-call-shape"></div>
                    <div class="footer-call-icon text-dark h2 mb-0">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <div class="footer-call-content text-start">
                        <span class="text-dark text-uppercase fw-bold small">Call for Taxi</span>
                        <h4 class="text-dark fw-bold mb-0">+5267-214-392</h4>
                    </div>
                </div>
            </div>
        </div>

        <hr class="footer-divider mb-5">

        <!-- Main Footer Columns -->
        <div class="row mb-5">
            <!-- App Store Column -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="footer-column-title text-white mb-4">App store</h4>
                <p class="footer-column-text text-muted mb-4 pe-lg-5">
                    Competently re-engineer cross-media breed meta services before parallel aliquam
                </p>
                <div class="footer-app-btns d-flex gap-2 mb-4">
                    <a href="#" class="footer-app-btn">
                        <img src="{{ asset('assets/images/google-play-badge.png') }}" alt="Get it on Google Play"
                            class="img-fluid app-badge">
                        {{-- Placeholder for actual Google Play badge --}}
                        <div class="app-badge-mock p-2 bg-dark rounded border border-secondary text-white small">
                            <i class="fa-brands fa-google-play me-1"></i> GET IT ON Google Play
                        </div>
                    </a>
                    <a href="#" class="footer-app-btn">
                        <img src="{{ asset('assets/images/app-store-badge.png') }}" alt="Download on the App Store"
                            class="img-fluid app-badge">
                        {{-- Placeholder for actual App Store badge --}}
                        <div class="app-badge-mock p-2 bg-dark rounded border border-secondary text-white small">
                            <i class="fa-brands fa-apple me-1"></i> Download on the App Store
                        </div>
                    </a>
                </div>
                <div class="footer-social-links d-flex gap-2">
                    <a href="#" class="footer-social-btn"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="footer-social-btn"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="footer-social-btn"><i class="fa-brands fa-pinterest-p"></i></a>
                    <a href="#" class="footer-social-btn"><i class="fa-brands fa-reddit-alien"></i></a>
                </div>
            </div>

            <!-- Services Column -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="footer-column-title text-white mb-4">Services</h4>
                <div class="row">
                    <div class="col-6">
                        <ul class="footer-links list-unstyled">
                            <li class="mb-3"><a href="#" class="text-decoration-none text-muted"><i
                                        class="fa-solid fa-angles-right me-2 x-small"></i> Airport Transport</a></li>
                            <li class="mb-3"><a href="#" class="text-decoration-none text-muted"><i
                                        class="fa-solid fa-angles-right me-2 x-small"></i> City Transport</a></li>
                            <li class="mb-3"><a href="#" class="text-decoration-none text-muted"><i
                                        class="fa-solid fa-angles-right me-2 x-small"></i> Online Booking</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="footer-links list-unstyled">
                            <li class="mb-3"><a href="#" class="text-decoration-none text-muted"><i
                                        class="fa-solid fa-angles-right me-2 x-small"></i> Business Transport</a></li>
                            <li class="mb-3"><a href="#" class="text-decoration-none text-muted"><i
                                        class="fa-solid fa-angles-right me-2 x-small"></i> Local Transport</a></li>
                            <li class="mb-3"><a href="#" class="text-decoration-none text-muted"><i
                                        class="fa-solid fa-angles-right me-2 x-small"></i> Taxi Tours</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Newsletter Column -->
            <div class="col-lg-4">
                <h4 class="footer-column-title text-white mb-4">Newsletter</h4>
                <p class="footer-column-text text-muted mb-4">
                    Sign up to receive updates, expert insights, and fresh articles straight to your inbox
                </p>
                <form class="footer-newsletter-form">
                    <div class="mb-3 position-relative">
                        <input type="email"
                            class="footer-newsletter-input form-control bg-transparent border-secondary text-white py-3"
                            placeholder="Your Email address">
                    </div>
                    <button type="submit" class="btn btn-subscribe text-uppercase fw-bold px-4 py-3">Subscribe</button>
                </form>
            </div>
        </div>

        <hr class="footer-divider-bottom mb-4">

        <!-- Bottom Bar -->
        <div
            class="footer-bottom-bar d-flex flex-column flex-lg-row justify-content-between align-items-center py-4 text-muted">
            <p class="mb-lg-0 small">© Copyright 2024 by kodesolution.com</p>
            <ul class="footer-bottom-links list-unstyled d-flex gap-3 mb-0 small">
                <li><a href="#" class="text-decoration-none text-muted">Home</a></li>
                <li class="text-muted">/</li>
                <li><a href="#" class="text-decoration-none text-muted">FAQs</a></li>
                <li class="text-muted">/</li>
                <li><a href="#" class="text-decoration-none text-muted">Contact Us</a></li>
            </ul>
        </div>
    </div>
</footer>