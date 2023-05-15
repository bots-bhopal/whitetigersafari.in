@extends('layouts.master')

@section('title','- Events & Happenings')

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

        header .main-header ul li ul li a{
            font-weight: 600!important;
        }

        .remember-area .image {
            padding: 20px 0 30px 0;
        }

        .sponser-area{
            padding: 0px 0px 20px 0px;
        }

        .sponser-area .single-sponser{
            margin-top: 0px;
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
                        <h2>{{ __('corner.events-h2') }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sponser-area">
                        <div class="single-sponser">
                            <div class="media">
                                <div class="media-body">
                                    <div class="section-title">
                                        <h2 class="text-center" style="font-weight: 700; font-size: 32px;">{{ __('corner.events-h2-1') }}</h2>
                                    </div>

                                    <h3 class="text-center" style="font-weight: 700;">{{ __('corner.events-h3-1') }}</h3>
                                    <ul style="margin-top: 25px;">
                                        <li>
                                            <h4 class="text-left" style="font-weight: 700;">{{ __('corner.events-h4-1') }}</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                {{ __('corner.events-p1') }}
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/news-corner/bagh-banayen.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <h4 class="text-left" style="font-weight: 700;">{{ __('corner.events-h4-2') }}</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                {{ __('corner.events-p2') }}
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/news-corner/itd-1.jpg')}}" alt="">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/news-corner/itd-2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <h4 class="text-left" style="font-weight: 700;">{{ __('corner.events-h4-3') }}</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                {{ __('corner.events-p3') }}
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/news-corner/anubhooti-1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <h4 class="text-left" style="font-weight: 700;">{{ __('corner.events-h4-4') }}</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                {{ __('corner.events-p4') }}
                                            </p>
                                        </li>
                                    </ul>

                                    <div class="section-title">
                                        <h2 class="text-center" style="font-weight: 700; font-size: 32px;">{{ __('corner.events-h2-2') }}</h2>
                                    </div>

                                    <h3 class="text-center" style="font-weight: 700;">{{ __('corner.events-h3-2') }}</h3>
                                    <ul style="margin-top: 25px;">
                                        <li><h4 class="text-left" style="font-weight: 700;">{{ __('corner.events-h4-5') }}</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                {{ __('corner.events-p5') }}
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/news-corner/iyd-1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <h4 class="text-left" style="font-weight: 700;">{{ __('corner.events-h4-6') }}</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                {{ __('corner.events-p6') }}
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/news-corner/itd-3.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li><h4 class="text-left" style="font-weight: 700;">{{ __('corner.events-h4-7') }}</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                {{ __('corner.events-p7') }}
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/news-corner/anubhooti-2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="section-title">
                                        <h2 class="text-center" style="font-weight: 700; font-size: 32px;">{{ __('corner.events-h2-3') }}</h2>
                                    </div>
                                    <h3 class="text-center" style="font-weight: 700;">{{ __('corner.events-h3-2') }}</h3>
                                    <ul style="margin-top: 25px;">
                                        <li><h4 class="text-left" style="font-weight: 700;">{{ __('corner.events-h4-9') }}</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                {{ __('corner.events-p9') }}
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/news-corner/anubhooti-3.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
