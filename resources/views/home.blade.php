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
                            <img src="{{ asset('assets/images/about/01.webp') }}" alt="about">
                        </div>
                        <div class="progress-circle-main-wrapper">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-about area end -->

     <!-- rts vision area start -->
    <div class="rts-about-five-area">
        <div class="container-full">
            <div class="row align-items-center">
                <div class="col-lg-6 pr--70 pr_md--0 pr_sm--0">
                    <div class="thumbnail-about-five">
                        <img src="{{ asset('assets/images/about/10.webp') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt_md--30 mt_sm--30">
                    <div class="about-content-inner-five">
                        <div class="title-style-five">
                            {{-- <span class="pre">More About Invena</span> --}}
                            <h2 class="title rts-text-anime-style-1">
                                Our Vision & Mission
                            </h2>
                        </div>
                        <div class="inner-about-home-7">
                            <p class="disc">
                               To be recognized as the leading and most
                               reliable partner in the supply of goods and
                               services to the Central African mining
                               industry. We will achieve this through our
                               unwavering commitment to reliability,
                               responsiveness, and sustainability, driven
                               by exceptional local talent and the
                               continuous development of our skills. <br><br>
                                Our vision also includes:
                            </p>
                            <!-- ingle about start -->
                            <div class="about-single-home-7">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/about/icons/03.svg') }}" alt="">
                                </div>
                                <div class="discription">
                                    <h6 class="title">
                                        Developing workers' skills
                                    </h6>
                                    <p class="disc">
                                         through training, skills transfer, and promoting local human resources.
                                    </p>
                                </div>
                            </div>
                            <!-- ingle about end -->
                            <!-- ingle about start -->
                            <div class="about-single-home-7">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/about/icons/04.svg') }}" alt="">
                                </div>
                                <div class="discription">
                                    <h6 class="title">
                                        Compliance with environmental standards
                                    </h6>
                                    <p class="disc">
                                        and the implementation of responsible practices to protect the ecosystem.
                                    </p>
                                </div>
                            </div>
                            <!-- ingle about end -->
                            <!-- ingle about start -->
                            <div class="about-single-home-7">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/about/icons/05.svg') }}" alt="">
                                </div>
                                <div class="discription">
                                    <h6 class="title">
                                        Alignment with the Sustainable Development Goals (SDGs)
                                    </h6>
                                    <p class="disc">
                                        in order to contribute positively to the economic, social, and environmental progress of local communities
                                    </p>
                                </div>
                            </div>
                            <!-- ingle about end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts vision area end -->

    <!-- rts service area start -->
    <div class="rts-service-area-start mb--100">
        <div class="container mt--30">
            <div class="row">
                <div class="col-lg-6 pr--30 pr_sm--10">
                    <section class="main-wrapper-sticky">
                        <div class="sticky-statement narrow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/service/01.svg') }}" alt="service">
                                </div>
                                <h5 class="title">Civil Engineering</h5>
                            </div>
                            <div class="right">
                                <a href="{{ route('services.details', ['slug' => "civil-engineering"]) }}" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement narrow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/service/02.svg') }}" alt="service">
                                </div>
                                <h5 class="title">Industrial Maintenance</h5>
                            </div>
                            <div class="right">
                                <a href="{{ route('services.details', ['slug' => "industrial-maintenance"]) }}" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement narrow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/service/03.svg') }}" alt="service">
                                </div>
                                <h5 class="title">Logistics and transportation</h5>
                            </div>
                            <div class="right">
                                <a href="{{ route('services.details', ['slug' => "logistics"]) }}" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <div class="title-style-one left mb--0 position-sticky top--120 mt_sm--40">
                        <span class="pre">DISCOVER</span>
                        <h2 class="title rts-text-anime-style-1 uppercase">Our Services
                        </h2>
                        <p class="disc">
                            We offer an extensive and integrated range of
                            goods and services designed to optimize your
                            operations, minimize downtime, and ensure the
                            successful completion of your projects. <br>
                            Our capabilities span the full life cycle of
                            industrial and mining operations.
                        </p>
                        <a href="{{ route('services.index') }}" class="rts-btn btn-primary">View All Services</a>
                    </div>
                    <div class="service-arrow-bottom-main">
                        <img src="{{ asset('assets/images/banner/shape/08.png') }}" alt="service">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->

     <!-- rts product area start -->
    <div class="rts-service-area-start mb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-style-one left mb--0 position-sticky top--120 mt_sm--40">
                        <span class="pre">DISCOVER</span>
                        <h2 class="title rts-text-anime-style-1 uppercase">Our Products
                        </h2>
                        <p class="disc">
                            The efficiency and success of any major
                            mining or industrial operation depend on the
                            quality and timely availability of essential
                            materials. CP Engineering SARL is your trusted
                            source for a comprehensive portfolio of
                            high-specification products, carefully
                            selected to meet the rigorous demands of
                            Central Africa's copper belt.
                        </p>
                        <a href="{{ route('services.index') }}" class="rts-btn btn-primary">View All Products</a>
                    </div>
                    <div class="service-arrow-bottom-main">
                        <img src="{{ asset('assets/images/banner/shape/08.png') }}" alt="service">
                    </div>
                </div>
                <div class="col-lg-6 pr--30 pr_sm--10">
                    <section class="main-wrapper-sticky">
                        <div class="sticky-statement narrow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/service/01.svg') }}" alt="service">
                                </div>
                                <h5 class="title">Building Materials</h5>
                            </div>
                            <div class="right">
                                <a href="{{ route('products.details', ['slug' => 'building-materials']) }}" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement narrow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/service/02.svg') }}" alt="service">
                                </div>
                                <h5 class="title">Metal Structures</h5>
                            </div>
                            <div class="right">
                                <a href="{{ route('products.details', ['slug' => 'metal-structures']) }}" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement narrow">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/service/03.svg') }}" alt="service">
                                </div>
                                <h5 class="title">Spare Parts</h5>
                            </div>
                            <div class="right">
                                <a href="{{ route('products.details', ['slug' => 'spare-parts']) }}" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- rts product area end -->

    <!-- start vedio area start -->
    {{-- <div class="rts-vedio-area-home-6 rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="thumbnail-image-gallery">
                        <img src="{{ asset('assets/images/gallery/16.webp') }}" alt="thumbnail-image">
                        <div class="vedio-icone">
                            <a class="video-play-button play-video popup-video" href="https://www.youtube.com/watch?v=vZE0j_WCRvI">
                                <span></span>
                            </a>
                            <div class="video-overlay">
                                <a href="#section1" class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="bg-shape-vedio-section">
            <img src="assets/images/gallery/bg-vedio.png" alt="bg">
        </div> -->
    </div> --}}
    <!-- start vedio area end -->
    <!-- rts partners area start -->
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
    <!-- rts partners area end -->
@endsection
