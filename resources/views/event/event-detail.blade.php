@extends('layouts.master')

@section('title','- Event Detail')

@push('css')
    <style>
        /* Header Top Right Language Bar Hide */
        .header-top-right .nav-item {
            display: none !important;
        }

        @media only screen and (min-width: 345px) and (max-width: 767px) {
            /* Hide Language Bar on Mobile View */
            .mean-container .mean-nav ul li:first-child {
                display: none!important;
            }
        }

        header .main-header ul li a{
            color: #dcd794!important;
            font-weight: 600!important;
        }

        .single-events-area .page-title {
            border-bottom: 2px solid #f4f4f4;
            display: block;
            width: 100%;
            margin: 50px 0 26px;
        }

        .single-events-area .page-title h2 {
            color: #385a57;
            font-family: 'Lato', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            margin: 0 0 10px;
        }

        .single-events-area .events-area {
            padding: 0;
        }

        .single-events-area .events-area .images a img {
            width: 100%;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .single-events-area .events-area .images {
            margin-bottom: 30px;
        }

        .single-events-area .events-area .images {
            margin-bottom: 30px;
        }

        .single-events-area .events-area .events-details h3 {
            font-family: 'Lato', sans-serif;
            margin-bottom: 20px;
        }

        .single-events-area .events-area .events-details h3 a {
            color: #385a57;
            font-weight: 400;
            font-size: 25px;
        }

        .single-events-area .events-area .events-details .events-informations {
            border-bottom: 1px solid #dddddd;
            overflow: hidden;
            padding-bottom: 40px;
        }

        .single-events-area .events-area .events-details .events-informations ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .single-events-area .events-area .events-details .events-informations ul li {
            color: #707070;
            width: 47%;
            float: left;
            margin-right: 15px;
        }

        .single-events-area .events-area .events-text {
            padding: 10px 0;
        }

        .single-events-area .events-area .events-text p {
            color: #707070;
            text-align: justify;
        }

        p {
            margin: 0 0 26px;
        }
    </style>
@endpush

@section('content')
    <!-- Breadcumb Area Start Here -->
    <div class="breadcumb-area">
    </div>
    <!-- Breadcumb Area End Here -->

    <!-- Single Events Area Start Here -->
    <div class="single-events-area thrre">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1">
                    <div class="page-title fouur">
                    <h2>{{ __('home.latest-event-h2') }}</h2>
                    </div>
                </div>

                <div class="image-block col-lg-10 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1">
                    <div class="events-area">
                        <div class="images image-box">
                            <figure class="image">
                                <img src="{{asset('public/storage/event_image/'.$events->image)}}" class="lazy-image owl-lazy" alt="">
                            </figure>
                            <a href="{{asset('public/storage/event_image/'. $events->image)}}" class="lightbox-image icon" data-fancybox="image"><span class="fa fa-search"></span></a>
                        </div>

                        <div class="events-details">
                            <h3><a>{{$events->title}}</a></h3>
                            <div class="events-informations">
                                <ul>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>  {{date('d-M-Y', strtotime($events->date))}}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="events-text">
                            <p>
                                {!! $events->description !!}
                            </p>
                        </div>

                        <!-- Related Images -->
                        <div class="zooks-promos-area">
                            @if ($events)
                                <div class="image-block total-promos-area">
                                    @foreach($events->images as $event)
                                    <div class="single-promos">
                                        <div class="image-box">
                                            <figure class="image">
                                                <img src="{{asset('public/storage/event_images/'. $event->image)}}" class="lazy-image owl-lazy" alt="">
                                                <div class="overlay-box">
                                                    <ul class="option-box">
                                                        <li><a href="{{asset('public/storage/event_images/'. $event->image)}}" class="lightbox-image" data-fancybox="image"><span class="fa fa-search"></span></a></li>
                                                    </ul>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <!--End Related Images -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Events Area End Here -->
@endsection
