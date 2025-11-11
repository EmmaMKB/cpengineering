@extends('layouts.master')

@section('content')
    <!-- about us area wrapper main -->
    <div class="rts-breadcrumb-area small-h">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="pre">Our Services</span>
                        <span class="bg-title">Our Services</span>
                        <h1 class="title rts-text-anime-style-1">
                            Service We Provide
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
@endsection
