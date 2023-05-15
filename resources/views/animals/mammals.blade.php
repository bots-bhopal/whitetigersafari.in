@extends('layouts.master')

@section('title','- Mammals')

@push('css')
    <style>
        header .main-header ul li a{
            color: #dcd794!important;
            font-weight: 600;
        }
    </style>
@endpush

@section('content')
    <!-- Breadcumb Area Start Here -->
    <div class="breadcumb-area four"></div>
    <!-- Breadcumb Area End Here -->

    <!-- Remember Start Here -->
    <div class="remember-area faq-area threee gallery-open">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>{{ __('animals.mammals-h2') }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="remember-content">
                        <ul>
                            <li>
                                <span>{{ __('animals.mammals-li-span1') }}</span>
                                <p>{{ __('animals.mammals-li-p1') }}</p>
                            </li>
                            <li>
                                <span>{{ __('animals.mammals-li-span2') }}</span>
                                <p>{{ __('animals.mammals-li-p2') }}</p>
                            </li>
                            <li>
                                <span>{{ __('animals.mammals-li-span3') }}</span>
                                <p>{{ __('animals.mammals-li-p3') }}</p>
                            </li>
                            <li>
                                <span>{{ __('animals.mammals-li-span4') }}</span>
                                <p>{{ __('animals.mammals-li-p4') }}</p>
                            </li>
                            <li>
                                <span>{{ __('animals.mammals-li-span5') }}</span>
                                <p>{{ __('animals.mammals-li-p5') }}</p>
                            </li>
                            <li>
                                <span>{{ __('animals.mammals-li-span6') }}</span>
                                <p>{{ __('animals.mammals-li-p6') }}</p>
                            </li>
                            <li>
                                <span>{{ __('animals.mammals-li-span7') }}</span>
                                <p>{{ __('animals.mammals-li-p7') }}</p>
                            </li>
                            <li>
                                <span>{{ __('animals.mammals-li-span8') }}</span>
                                <p>{{ __('animals.mammals-li-p8') }}</p>
                            </li>
                            <li>
                                <span>{{ __('animals.mammals-li-span9') }}</span>
                                <p>{{ __('animals.mammals-li-p9') }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center">
                    <div class="image">
                        <img src="{{asset('public/assets/images/animals/mammals.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Remember End Here -->
@endsection
