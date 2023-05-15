@extends('layouts.master')

@section('title','- Gallery')

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
    <div class="breadcumb-area"></div>
    <!-- Breadcumb Area End Here -->

    <!-- Opening Hours Start Here -->
    <div class="openning-area gallery-open">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>{{ __('home.gallery-h1') }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="home-services-area gallery-area">
                    <div class="container">
                        <div class="row">
                        @forelse($images as $image)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="single-services widget">
                                    <div class="services-image gallery">
                                        <a href="{{asset('public/storage/gallery/'.$image->filename)}}"><img src="{{asset('public/storage/gallery/'.$image->filename)}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="text-center" style="font-weight: 600;">{{ __('home.gallery-not-found') }}</h2>
                            </div>
                        @endforelse
                        </div>

                        <!-- Pagination Section Start Here -->
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="d-flex justify-content-center">
                                    {!! $images->links() !!}
                                </div>
                            </div>
                        </div>
                        <!-- Pagination Section End Here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Opening Hours End Here -->
@endsection
