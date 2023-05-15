@extends('layouts.master')

@section('title','- Website-Under-Maintenance')

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

    <!-- Opening Hours Start Here -->
    <div class="openning-area gallery-open bg-error">
        <div class="container">
            <div class="row rm-mrgn">
                <div class="container ">
                    <div class="row rm-mrgn">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="single-services widget">
                                <div class="services-image heig">
                                    <img src="{{asset('public/assets/images/web-under-const.jpg')}}" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Opening Hours End Here -->
@endsection
