@extends('layouts.master')

@section('title','- Visitor-Amenities')

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
                        <h2>{{ __('visit.visitor-h2') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 text-center">
                    <div class="image">
                        <img src="{{asset('public/assets/images/visit/visitors.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sponser-area">
                    <div class="single-sponser">
                        <div class="media">
                            <div class="media-body">
                                <ul style="text-align: justify;">
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('visit.visitor-l1') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('visit.visitor-l2') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('visit.visitor-l3') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('visit.visitor-l4') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('visit.visitor-l5') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('visit.visitor-l6') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('visit.visitor-l7') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('visit.visitor-l8') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('visit.visitor-l9') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('visit.visitor-l10') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('visit.visitor-l11') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('visit.visitor-l12') }}</li>
                                    <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('visit.visitor-l13') }}</li>
                                </ul>
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
