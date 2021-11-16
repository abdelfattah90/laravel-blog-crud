<div>
    @if (Route::has('login'))

        @auth
            <div data-aos="fade-up" data-aos-delay="600">
                <div class="text-center text-lg-start">
                    <a href="{{ url('/dashboard') }}"
                        class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Dashboard</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        @else
            <div data-aos="fade-up" data-aos-delay="600">
                <div class="text-center text-lg-start">
                    <a href="{{ route('login') }}"
                        class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Get Started</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>


        @endauth

    @endif
</div>
