@extends('layouts.master')

@section('title','- About-Zoo')

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
        <div class="remember-area faq-area threee">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-title">
                            <h2>About Zoo & Safari</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center">
                        <div class="image">
                            <img src="{{asset('assets/images/element.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                      <div class="sponser-area">
                        <div class="single-sponser">
                          <div class="media">
                              <div class="media-body">
                                    <p class="text-justify" style="font-weight: 500;">The Maharaja Martand Singh Judeo white tiger safari and zoo is located in the Mukundpur of Satna district of Rewa division. The zoo is 15 km far from Rewa and 55 km far from Satna.</p>
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
