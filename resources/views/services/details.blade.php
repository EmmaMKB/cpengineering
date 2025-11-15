@extends('layouts.master')

@section('content')
    <div class="breadcrumb-service-detals-one">
        <div class="container-1754">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-service-details-1 bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="title-area-left">
                                        <span class="bg-title">{{ $service['name'] }}</span>
                                        <h1 class="title rts-text-anime-style-1">
                                            {{ $service['name'] }}
                                        </h1>
                                        <p class="disc">
                                            {{ $service['subtitle'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts business details area left main -->
    <div class="rts-service-details-area-main-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="service-details-left-area">
                        <div class="thumbnail">
                            <img src="{{ asset($service['banner_image']) }}" alt="">
                        </div>
                        <h3 class="title">{{ $service['name'] }}</h3>
                        <p class="disc">
                            {{ $service['description'] }}
                        </p>

                        <div class="service-short-main-wrapper">
                            @foreach ($service['services_list'] as $p_list)
                                <div class="single-short-service">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/service/06.svg') }}" alt="">
                                    </div>
                                    <div class="inner-content">
                                        <h5 class="title-sm">{{ $p_list }}</h5>
                                        <p class="disc">

                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_lg--0 pl_md--0 pl-lg-controler pl_sm--0 mt-service-shorter">
                    <!-- single wizered start -->
                    <div class="rts-single-wized Categories service">
                        <div class="wized-header">
                            <h5 class="title">
                                Other Services
                            </h5>
                        </div>
                        <div class="wized-body">
                            @foreach ($otherServices as $s)
                                <ul class="single-categories">
                                    <li><a href="{{ route('services.details', ['slug' => $s['slug']]) }}">{{ $s['name'] }} <i class="far fa-long-arrow-right"></i></a></li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    <!-- single wizered End -->

                    <!-- single wizered start -->
                    <div class="rts-single-wized contact service">
                        <div class="wized-header">
                            <a href="#"><img src="{{ asset('assets/images/logo/logo-2@3x.png') }}" alt="Business_logo"></a>
                        </div>
                        <div class="wized-body">
                            <h5 class="title">Need Help? We Are Here
                                To Help You</h5>
                            <a class="rts-btn btn-primary btn-white" href="#">Contact Us</a>
                        </div>
                    </div>
                    <!-- single wizered End -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts business details area left main end -->
@endsection

