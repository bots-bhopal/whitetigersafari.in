@extends('layouts.master')

@section('title',"- Do(s) & Don't(s)")

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
                        <h2>{{ __('visit.dos') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center">
                    <div class="image">
                        <img src="{{asset('public/assets/images/visit/dos.jpg')}}" alt="">
                        <img src="{{asset('public/assets/images/visit/dont.jpg')}}" alt="" style="margin-top: 20px;">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="sponser-area">
                    <div class="single-sponser">
                        <div class="media">
                            <div class="media-body">
                                <h2 class="all-h2">{{ __('visit.rules-h2') }} </h2>
                                <ol class="text-justify" style="font-weight: 500;">
                                    <li>{{ __('visit.rules-l1') }}</li>
                                    <li>{{ __('visit.rules-l2') }}</li>
                                    <li>{{ __('visit.rules-l3') }}</li>
                                    <li>{{ __('visit.rules-l4') }}</li>
                                    <li>{{ __('visit.rules-l5') }}</li>
                                    <li>{{ __('visit.rules-l6') }}</li>
                                    <li>{{ __('visit.rules-l7') }}</li>
                                    <li>{{ __('visit.rules-l8') }}</li>
                                    <li>{{ __('visit.rules-l9') }}</li>
                                    <li>{{ __('visit.rules-l10') }}</li>
                                    <li>{{ __('visit.rules-l11') }}</li>
                                    <li>{{ __('visit.rules-l12') }}</li>
                                    <li>{{ __('visit.rules-l13') }}</li>
                                    <li>{{ __('visit.rules-l14') }}</li>
                                    <li>{{ __('visit.rules-l15') }}</li>
                                </ol>

                                <h2 class="all-h2">{{ __('visit.term-h2') }}</h2>
                                <ol class="text-justify" style="font-weight: 500;">
                                    <li>{{ __('visit.term-l1') }}</li>
                                    <li>{{ __('visit.term-l2') }}</li>
                                    <li>{{ __('visit.term-l3') }}</li>
                                    <li>{{ __('visit.term-l4') }}</li>
                                    <li>{{ __('visit.term-l5') }}</li>
                                    <li>{{ __('visit.term-l6') }}</li>
                                </ol>
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
