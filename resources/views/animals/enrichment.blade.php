@extends('layouts.master')

@section('title','- Enrichment')

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

        .remember-area .image {
            padding: 20px 0 30px 0;
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
                        <h2>{{ __('animals.enrichment-h2') }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sponser-area" style="padding-top: 0px;">
                        <div class="single-sponser" style="margin-top: 0px;">
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="text-center" style="font-weight: 700;">{{ __('animals.enrichment-h3') }}</h3>

                                    <p class="text-justify" style="font-weight: 500;">
                                        {{ __('animals.enrichment-p1') }}
                                    </p>

                                    <p class="text-justify" style="font-weight: 500;">
                                        {{ __('animals.enrichment-p2') }}
                                    </p>

                                    <ul>
                                        <li>
                                            <h4 class="text-left" style="font-weight: 700;">{{ __('animals.enrichment-h4-1') }}</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                {{ __('animals.enrichment-h4-p1') }}
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/animals/installation-2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <h4 class="text-left" style="font-weight: 700;">{{ __('animals.enrichment-h4-2') }}</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                {{ __('animals.enrichment-h4-p2') }}
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/animals/construction.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <h4 class="text-left" style="font-weight: 700;">{{ __('animals.enrichment-h4-3') }}</h4>
                                            <p class="text-justify" style="font-weight: 500;">
                                                {{ __('animals.enrichment-h4-p3') }}
                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="image">
                                                    <img src="{{asset('public/assets/images/animals/installation-3.jpg')}}" alt="">
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
    <!-- Remember End Here -->
@endsection
