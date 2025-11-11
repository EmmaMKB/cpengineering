@extends('layouts.master')

@section('content')
    <div class="rts-banner-area banner-style-one bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-one-inner text-start">
                        <p class="pre-title">
                            <span>Welcome!</span> at CP Engineering
                        </p>
                        <h1 class="title rts-text-anime-style-1">
                            We got Innovative <span>Solutions,</span> Tailored for Your Success
                        </h1>
                        <p class="disc banner-para">
                            Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui
                            feugiat
                            fusce conubia ridiculus tristique parturient
                        </p>
                        <a href="#" class="rts-btn btn-primary color-h-black">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-iamge-area">
            <img src="{{ asset('assets/images/banner/shape/04.png') }}" alt="" class="one">
            <img src="{{ asset('assets/images/banner/shape/circle.svg') }}" alt="" class="two">
        </div>
    </div>

    <!-- rts-about area start -->
    <div class="rts-about-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-content-left-one">
                        <div class="title-style-one left">
                            <span class="pre">Discover More</span>
                            <h2 class="title rts-text-anime-style-1">About Us <br>

                            </h2>
                        </div>
                        <p class="disc">
                            We are a registered Congolese company strategically based in Kolwezi,
                            the vital center of the Democratic Republic of Congo's (DRC)
                            copper belt. <br> <br>
                            We specialize in the efficient and reliable supply of
                            essential goods and services tailored specifically
                            for the mining sector. Operating throughout the
                            strategic provinces of Haut-Katanga and Lualaba,
                            we are the preferred local partner committed to supporting
                            the seamless operations and growth of mining companies in
                            the region.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 pl--70">
                    <div class="thumbnail-about-and-progress-1">

                        <div class="thumbnail-about-1">
                            <img src="assets/images/about/01.webp" alt="about">
                        </div>
                        <div class="progress-circle-main-wrapper">

                            <div class="progress-area-wrapper images-r">
                                <div class="single-progress-circle">
                                    <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                        <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                        <circle class="bar--animated" cx="40" cy="40" r="35"
                                            style="stroke-dashoffset: 217.8;"></circle>
                                        <text class="countervalue start" x="50%" y="55%"
                                            transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                    </svg>
                                </div>
                                <h5 class="title">Business Progress</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-about area end -->

    <div class="rts-client-area ptb--100 brand-bg-three bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-five center mb--30">
                        <span class="pre">Our Partners</span>
                        {{-- <h2 class="title">Effective Services</h2> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-three-wrapper">
                        <div class="single">
                            <img src="{{ asset('assets/images/partners/partner-1.png') }}" alt="Business_client">
                        </div>
                        <div class="single">
                            <img src="{{ asset('assets/images/partners/partner-2.png') }}" alt="Business_client">
                        </div>
                        <div class="single">
                            <img src="{{ asset('assets/images/partners/partner-3.png') }}" alt="Business_client">
                        </div>
                        <div class="single">
                            <img src="{{ asset('assets/images/partners/partner-4.png') }}" alt="Business_client">
                        </div>
                        <div class="single">
                            <img src="{{ asset('assets/images/partners/partner-5.png') }}" alt="Business_client">
                        </div>
                        <div class="single">
                            <img src="{{ asset('assets/images/partners/partner-6.png') }}" alt="Business_client">
                        </div>
                        <div class="single">
                            <img src="{{ asset('assets/images/partners/partner-7.png') }}" alt="Business_client">
                        </div>
                        <div class="single">
                            <img src="{{ asset('assets/images/partners/partner-8.png') }}" alt="Business_client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
