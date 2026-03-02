<section class="hero-section">

    {{-- Background overlay --}}
    <div class="hero-bg-overlay"></div>

    <div class="container hero-container">

        {{-- LEFT: Headline --}}
        <div class="hero-left">
            <h1 class="hero-headline">
                <span class="hero-word-yellow">Earn.</span>
                <span class="hero-word-blue">Connect.</span>
                <span class="hero-word-white">Contribute.</span>
            </h1>
            <p class="hero-sub">
                Partner with us to drive your own livelihood and make a meaningful
                impact in your community.
            </p>
            <div class="hero-app-btns d-flex flex-wrap gap-3">
                <a href="#" class="hero-store-btn">
                    <i class="fa-brands fa-apple"></i>
                    <span>App Store</span>
                </a>
                <a href="#" class="hero-store-btn">
                    <i class="fa-brands fa-google-play"></i>
                    <span>Google Play</span>
                </a>
            </div>
        </div>

        {{-- RIGHT: Tab Card --}}
        <div class="hero-card">

            {{-- Tabs --}}
            <div class="hero-tabs" id="heroTabLinks" role="tablist">
                <button class="hero-tab-btn active" id="ride-tab" data-bs-toggle="tab" data-bs-target="#tab-ride"
                    type="button" role="tab" aria-controls="tab-ride" aria-selected="true">
                    <i class="fa-solid fa-car-side me-1"></i> Take a Ride
                </button>
                <button class="hero-tab-btn" id="drive-tab" data-bs-toggle="tab" data-bs-target="#tab-drive"
                    type="button" role="tab" aria-controls="tab-drive" aria-selected="false">
                    <i class="fa-solid fa-id-badge me-1"></i> Apply to Drive
                </button>
            </div>

            {{-- Tab Content --}}
            <div class="tab-content hero-tab-content">

                {{-- Take a Ride Tab --}}
                <div class="tab-pane fade show active" id="tab-ride" role="tabpanel" aria-labelledby="ride-tab">
                    <div class="hero-form-header">
                        <h2>Book Your Ride</h2>
                        <p>Comfortable trips at your doorstep</p>
                    </div>
                    <form class="hero-form" onsubmit="return false;">
                        <div class="hero-input-group">
                            <input type="text" class="hero-input" placeholder="Pickup Location" />
                        </div>
                        <div class="hero-input-group">
                            <input type="text" class="hero-input" placeholder="Drop Location" />
                        </div>
                        <div class="hero-input-group">
                            <input type="date" class="hero-input" placeholder="Date" />
                        </div>
                        <div class="hero-input-group">
                            <input type="tel" class="hero-input" placeholder="Phone Number" />
                        </div>
                        <button type="submit" class="hero-submit-btn">BOOK NOW</button>
                    </form>
                </div>

                {{-- Apply to Drive Tab --}}
                <div class="tab-pane fade" id="tab-drive" role="tabpanel" aria-labelledby="drive-tab">
                    <div class="hero-form-header">
                        <h2>Start Driving and Get Paid</h2>
                        <p>Become a partner and earn on your schedule</p>
                    </div>
                    <form class="hero-form" onsubmit="return false;">
                        <div class="row g-3 mb-0">
                            <div class="col-6">
                                <input type="text" class="hero-input" placeholder="First Name" />
                            </div>
                            <div class="col-6">
                                <input type="text" class="hero-input" placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="hero-input-group">
                            <input type="email" class="hero-input" placeholder="Email Address" />
                        </div>
                        <div class="hero-input-group">
                            <input type="tel" class="hero-input" placeholder="Phone Number" />
                        </div>
                        <div class="hero-input-group">
                            <input type="text" class="hero-input" placeholder="City" />
                        </div>
                        <div class="hero-checkbox-group d-flex align-items-center gap-2">
                            <input type="checkbox" id="terms" class="hero-checkbox" />
                            <label for="terms">
                                I agree to the <a href="#" class="hero-terms-link">Terms and Conditions</a>
                            </label>
                        </div>
                        <button type="submit" class="hero-submit-btn">BECOME A DRIVER</button>
                    </form>
                </div>

            </div>
        </div>

    </div>
</section>