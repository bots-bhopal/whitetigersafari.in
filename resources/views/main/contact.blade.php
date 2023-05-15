@extends('layouts.master')

@section('title','- Contact-Us')

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

        .mt-2{
            margin-top: 10px;
        }
    </style>
@endpush

@section('content')
    <!-- Breadcumb Area Start Here -->
    <div class="breadcumb-area two">
        <div class="container">
            <div class="row">
                <div class="breadcumb">
                    <h2>{{ __('contact.location-h2') }}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area End Here -->

    <!-- Where We Are Start Here -->
    <div class="where-we-area gallery-open">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>{{ __('contact.location-h1') }}</h2>
                        <p style="text-align: justify;">
                            <span>{{ __('contact.location-p-span') }}</span>
                            {{ __('contact.location-p') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="map-area">
                        <div id="map" class="map-full" style="width:100%; height:390px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7265.29850494466!2d81.248!3d24.42825!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39844363a177f035%3A0x415983b0f8ab0fc3!2sWhite%20Tiger%20Safari%20%26%20Zoo%2C%20Mukundpur%2C%20Rewa%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1611211692538!5m2!1sen!2sin" width="100%" height="375" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-contact">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="{{asset('public/assets/images/map/6.png')}}" alt="Generic placeholder image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading mt-2">{{ __('contact.address-h4') }}</h4>
                                <p>{{ __('contact.address-p1') }}</p>
                                <p>{{ __('contact.address-p2')}} <br> {{ __('contact.address-p2-pin') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-contact">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="{{asset('public/assets/images/map/7.png')}}" alt="Generic placeholder image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading mt-2">{{ __('contact.phone-h4') }}</h4>
                                <p>{{ __('contact.phone-p1') }} <br> {{ __('contact.phone-p1-number') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-contact">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="{{asset('public/assets/images/map/8.png')}}" alt="Generic placeholder image">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading mt-2">{{ __('contact.gps-h4') }}</h4>
                                <p>{{ __('contact.gps-p1') }} <br/>{{ __('contact.gps-p1-br') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Where We Are End Here -->
@endsection
