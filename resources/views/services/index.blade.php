@extends('layouts.master')

@section('content')
    <!-- about us area wrapper main -->
    <div class="rts-breadcrumb-area small-h">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="pre">Our Services</span>
                        <span class="bg-title">Services</span>
                        <h1 class="title rts-text-anime-style-1">
                            Services We Offer
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="{{ asset('assets/images/about/shape/01.png') }}" alt="shape" class="one">
            <img src="{{ asset('assets/images/about/shape/02.png') }}" alt="shape" class="two">
            <img src="{{ asset('assets/images/about/shape/03.png') }}" alt="shape" class="three">
        </div>
    </div>
    <!-- about us area wrapper main end -->
    <!-- why choose us area start -->
    <div class="why-choose-us-area rts-section-gapBottom rts_jump_animation-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-four center">
                        <h2 class="title rts-text-anime-style-1">We <span>Offer</span></h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                @foreach ($services as $s)
                    <div class="col-lg-3 col-md-6 col-sm-12 rts-jump__item">
                        <div class="single-why-choose-four">
                            <a href="#" class="thumbnail">
                                <img src="{{ $s['image_path'] }}" alt="choose">
                            </a>
                            <div class="inner-content">
                                <a href="#">
                                    <h5 class="title">{{ $s['name'] }}</h5>
                                </a>
                                <p class="disc">
                                    {{ $s['subtitle'] }}
                                </p>
                                <a href="{{ route('services.details', ['slug' => $s['slug']]) }}" class="read-more">Read More <i
                                        class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- why choose us area end -->
@endsection
