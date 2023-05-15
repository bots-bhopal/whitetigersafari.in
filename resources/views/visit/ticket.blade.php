@extends('layouts.master')

@section('title','- Tickets & Pricing')

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
    <div class="openning-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>{{ __('visit.ticket-h2') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="opening-hours">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">{{ __('visit.ticket-th1') }}</th>
                                        <th class="text-center">{{ __('visit.ticket-th2') }}</th>
                                        <th class="text-center">{{ __('visit.ticket-th3') }}</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- On cells (`td` or `th`) -->
                                    <tr>
                                        <td class="text-center">{{ __('visit.ticket-tr1-td1') }}</td>
                                        <td>{{ __('visit.ticket-tr1-td2') }}</td>
                                        <td class="text-center">{{ __('visit.ticket-tr1-td3') }}</td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">{{ __('visit.ticket-tr2-td1') }}</td>
                                        <td>{{ __('visit.ticket-tr2-td2') }}</td>
                                        <td class="text-center">{{ __('visit.ticket-tr2-td3') }}</td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">{{ __('visit.ticket-tr3-td1') }}</td>
                                        <td>{{ __('visit.ticket-tr3-td2') }}</td>
                                        <td class="text-center">{{ __('visit.ticket-tr3-td3') }}</td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">{{ __('visit.ticket-tr4-td1') }}</td>
                                        <td>{{ __('visit.ticket-tr4-td2') }}</td>
                                        <td class="text-center">{{ __('visit.ticket-tr4-td3') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="{{asset('public/assets/images/visit/ticket.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Opening Hours End Here -->
@endsection
