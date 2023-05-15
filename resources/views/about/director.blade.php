@extends('layouts.master')

@section('title','- Directors-Desk')

@push('css')
    <style>
        header .header-top .header-top-right ul li {
            color: #000000!important;
            font-weight: 600!important;
        }

        header .header-top .header-top-right ul li a{
            color: #000000!important;
            font-weight: 600!important;
        }

        header .main-header ul li.active a {
            color: #000000;
        }

        header .main-header ul li a {
            display: block;
            text-decoration: none;
            font-family: "Architects Daughter", cursive;
            color: #000000;
            font-weight: 600!important;
            padding: 20px 25px;
            font-size: 22px;
            font-weight: 300;
            letter-spacing: 1px;
            transition: all 0.3s;
        }
    </style>
@endpush

@section('content')
    <!-- Breadcumb Area Start Here -->
    <div class="breadcumb-area two"></div>
    <!-- Breadcumb Area End Here -->

    <!-- Remember Start Here -->
    <div class="remember-area faq-area threee gallery-open">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>{{ __('about.director-desk-h2') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
                    <div class="image">
                        <img src="{{asset('public/assets/images/about/director.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div class="sponser-area">
                        <div class="single-sponser">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-justify" style="font-weight: 500;">
                                        {{ __('about.director-desk-p1') }}
                                    </p>

                                    <p class="text-justify" style="font-weight: 500;">
                                        {{ __('about.director-desk-p2') }}
                                    </p>

                                    <p class="text-justify" style="font-weight: 500;">
                                        {{ __('about.director-desk-p3') }}
                                    </p>

                                    <p class="text-justify" style="font-weight: 700; font-size: 16px;">
                                        {{ __('about.director-desk-p4') }}
                                    </p>

                                    <p class="text-justify" style="font-weight: 700; font-size: 16px;">
                                        {{ __('about.director-desk-p5') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Remember End Here -->
@endsection
