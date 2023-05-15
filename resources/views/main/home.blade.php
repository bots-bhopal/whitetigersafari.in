@extends('layouts.master')

@push('css')
    <style>
        .our-video-content-area .latest-news .single-news-area {
            width: 100%;
            min-height: 280px;
            margin-bottom: 15px;
            border: 4px solid #e6dccf;
        }

        .media-object {
            width: 100%;
            height: 240px;
            display: block;
        }

        header .main-header ul li.active a{
            color: #ffffff!important;
        }

        header .main-header ul li a{
            color: #dcd794!important;
            cursor: pointer;
        }

        .our-video-content-area .latest-news .section-title h2{
            margin: 30px 0 30px 0;
        }

        header .header-top .header-top-right{
            font-weight: 600;
            letter-spacing: 0.5px;
        }
    </style>
@endpush

<!-- Main Content Area Start Here -->
@section('content')
    <!-- Slider Area Start Here -->
    <div class="slider-area">
        <div class="slide-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="span3 span33 wow bounceInDown center" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInDown;">{{ __('home.title-part1') }}
                            <br>{{ __('home.title-part2') }}
                        </h2>
                        <p data-wow-delay="0.2s" class="span3 wow bounceIn center" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">{{ __('home.address-para') }}</p>
                        <a href="{{route('mukundpur.vision')}}" data-wow-delay="0.3s" class="span3 wow bounceInDown center" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInDown;">{{ __('home.link-btn') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 data-wow-delay="0.5s" class="span3 wow bounceInUp center" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInUp;">{{ __('home.title-part1') }}
                            <br>{{ __('home.title-part2') }}
                        </h2>
                        <p>{{ __('home.address-para') }}</p>
                        <a href="{{route('mukundpur.vision')}}">{{ __('home.link-btn') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide-dot">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="slide-dots">
                        <a class="slide-dots-next"></a>
                        <a class="slide-dots-prev"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End Here -->

    <!-- Home Services Start Here -->
    <div class="home-services-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <h2>{{ __('home.special-attr-h1') }}</h2>
                        <div class="services-image">
                            <a href="#"><img src="{{asset('public/assets/images/services/leopards.jpg')}}" alt=""></a>
                            <div class="overley">
                                <div class="services-details">
                                    <h4><a href="{{route('mukundpur.special-attraction')}}">{{ __('home.attr-caption') }}</a></h4>
                                    <div class="services-botton">
                                        <a href="{{route('mukundpur.special-attraction')}}">{{ __('home.link-btn') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <h2>{{ __('home.animal-adop-h1') }}</h2>
                        <div class="services-image">
                            <a href="#"><img src="{{asset('public/assets/images/services/t1.jpg')}}" alt=""></a>
                            <div class="overley">
                                <div class="services-details">
                                    <h4><a href="{{route('mukundpur.adoption')}}">{{ __('home.animal-caption') }}</a></h4>
                                    <div class="services-botton">
                                        <a href="{{route('mukundpur.adoption')}}">{{ __('home.link-btn') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <h2>{{ __('home.news-croner-h1') }}</h2>
                        <div class="services-image">
                            <a href="#"><img src="{{asset('public/assets/images/services/6.jpg')}}" alt=""></a>
                            <div class="overley">
                                <div class="services-details">
                                    <h4><a href="{{route('mukundpur.newses')}}">{{ __('home.news-corner-caption') }}</a></h4>
                                    <div class="services-botton">
                                        <a href="{{route('mukundpur.newses')}}">{{ __('home.link-btn') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-services">
                        <h2>{{ __('home.gallery-h1') }}</h2>
                        <div class="services-image">
                            <a href="#"><img src="{{asset('public/assets/images/services/crimson-rose.jpg')}}" alt=""></a>
                            <div class="overley">
                                <div class="services-details">
                                    <h4><a href="{{route('mukundpur.gallery')}}">{{ __('home.gallery-caption') }}</a></h4>
                                    <div class="services-botton">
                                        <a href="{{route('mukundpur.gallery')}}">{{ __('home.link-btn') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Services End Here -->

    <!-- Plan Your Visit Start Here -->
    <div class="home-plan-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2 style="font-size: 44px; font-weight: 500;">{{ __('home.plan-h1') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-plan">
                        <div class="plan-icon">
                            <a href="{{route('mukundpur.timings')}}"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="plan-details">
                            <h3><a href="{{route('mukundpur.timings')}}">{{ __('home.visiting-hours-h3') }}</a></h3>
                            <p>{{ __('home.visiting-hours-para-part1') }} <br>{{ __('home.visiting-hours-para-part2') }}</p>
                            <div class="read-more">
                                <a href="{{route('mukundpur.timings')}}">{{ __('home.link-read-btn') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-plan">
                        <div class="plan-icon">
                            <a href="{{route('mukundpur.ticket')}}"><i class="fa fa-comments-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="plan-details">
                            <h3><a href="{{route('mukundpur.ticket')}}">{{ __('home.ticket-h3') }}</a></h3>
                            <p>{{ __('home.ticket-para') }}</p>
                            <div class="read-more">
                                <a href="{{route('mukundpur.ticket')}}">{{ __('home.link-read-btn') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-plan">
                        <div class="plan-icon">
                            <a href="#"><i class="flaticon-animal-1"></i></a>
                        </div>
                        <div class="plan-details">
                            <h3><a href="#">{{ __('home.zoo-map-h3') }}</a></h3>
                            <p>{{ __('home.zoo-para-part1') }}<br>{{ __('home.zoo-para-part2') }}</p>
                            <div class="read-more">
                                <a href="{{url('/construction')}}">{{ __('home.link-read-btn') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-plan">
                        <div class="plan-icon">
                            <a href="{{route('mukundpur.events-happenings')}}"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                        </div>
                        <div class="plan-details">
                            <h3><a href="{{route('mukundpur.events-happenings')}}">{{ __('home.events-h3') }}</a></h3>
                            <p>{{ __('home.events-para') }}</p>
                            <div class="read-more">
                                <a href="{{route('mukundpur.events-happenings')}}">{{ __('home.link-read-btn') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Plan Your Visit End Here -->

    <!-- About Us Area Start Here -->
    <div class="about-us-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-content">
                        <h2>{{ __('home.experience-h2-part1') }}<br>{{ __('home.experience-h2-part2') }}</h2>
                        <ul>
                            <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('home.experience-caption1') }}</li>
                            <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('home.experience-caption2') }}</li>
                            <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('home.experience-caption3') }}</li>
                            <li><img src="{{asset('public/assets/images/footer/icon.png')}}" alt="" /> {{ __('home.experience-caption4') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End Here -->

    <!-- Our Animal Start Here -->
    <div class="our-animal-area">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="section-title">
                    <h2>{{ __('home.our-animals-h2') }}</h2>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                    <div class="total-area">
                        <div class="singla-animal">
                            <div class="image">
                                <a href="#"><img src="{{asset('public/assets/images/animals/COMMON-LEOPARD.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="button">
                                        <a href="#">{{ __('home.link-see-details') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="singla-animal">
                            <div class="image">
                                <a href="#"><img src="{{asset('public/assets/images/animals/CRIMSON-ROSE.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="button">
                                        <a href="#">{{ __('home.link-see-details') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="singla-animal">
                            <div class="image">
                                <a href="#"><img src="{{asset('public/assets/images/animals/DSC_0449.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="button">
                                        <a href="#">{{ __('home.link-see-details') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="singla-animal">
                            <div class="image">
                                <a href="#"><img src="{{asset('public/assets/images/animals/DSC_0538.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="button">
                                        <a href="#">{{ __('home.link-see-details') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="singla-animal">
                            <div class="image">
                                <a href="#"><img src="{{asset('public/assets/images/animals/Recoverd.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="button">
                                        <a href="#">{{ __('home.link-see-details') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="singla-animal">
                            <div class="image">
                                <a href="#"><img src="{{asset('public/assets/images/animals/TICKELLS.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="button">
                                        <a href="#">{{ __('home.link-see-details') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="singla-animal">
                            <div class="image">
                                <a href="#"><img src="{{asset('public/assets/images/animals/DSC_0605.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="button">
                                        <a href="#">{{ __('home.link-see-details') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="singla-animal">
                            <div class="image">
                                <a href="#"><img src="{{asset('public/assets/images/animals/DSC_0449.jpg')}}" alt=""></a>
                                <div class="overley">
                                    <div class="button">
                                        <a href="#">{{ __('home.link-see-details') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Animal End Here -->

    <!-- Our Latest Event Area Start Here -->
    <div class="our-video-content-area">
        <div class="container">
            <div class="row latest-news">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>{{ __('home.latest-event-h2') }}</h2>
                    </div>
                </div>

                @forelse ($events as $event)
                    <div class="image-block col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="single-news-area">
                            <div class="media">
                                <div class="image-box">
                                    <figure class="image">
                                        <img class="media-object" src="{{asset('public/storage/event_image/'.$event->image)}}" alt="Generic placeholder image">
                                    </figure>
                                </div>

                                <div class="media-body">
                                    <h4 class="media-heading"><a style="font-size: 22px!important; cursor: default;">{!! Str::limit($event->title, 40, '...') !!}</a></h4>
                                    <p>{!! Str::limit($event->description, 150, '...') !!}</p>
                                    <div class="read-more">
                                        <a href="{{route('mukundpur.event-details', $event->slug)}}">{{ __('home.link-read-btn') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 col-md-12 p-0">
                        <div class="card h-100">
                            <div class="p-2 text-center">
                                <h2 style="font-weight: 600">{{ __('home.event-not-found') }}</h2>
                            </div><!-- single-post -->
                        </div><!-- card -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endforelse

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="all-news">
                        <a href="{{route('mukundpur.events')}}">{{ __('home.link-all-events') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Latest Event Area End Here -->

    <!-- Our Latest News Area Start Here -->
    <div class="our-video-content-area">
        <div class="container">
            <div class="row latest-news">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>{{ __('home.latest-news-h2') }}</h2>
                    </div>
                </div>
                @forelse ($news as $news)
                    <div class="image-block col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="single-news-area">
                            <div class="media">
                                <div class="image-box">
                                    <figure class="image">
                                        @php
                                            $path = public_path() . "/storage/news_image/".$news->image;
                                        @endphp

                                        @if (!empty($news['image']) && file_exists($path))
                                            <img class="media-object" src="{{asset('public/storage/news_image/'.$news->image)}}" alt="">
                                        @else
                                            <img src="{{asset('public/assets/images/image-gallery.jpg')}}" class="img-responsive rounded" alt="image">
                                        @endif
                                    </figure>
                                </div>

                                <div class="media-body">
                                    <h4 class="media-heading"><a style="font-size: 22px!important; cursor: default;">{!! Str::limit($news->title, 40, '...') !!}</a></h4>
                                    <p>{!! Str::limit($news->description, 150, '...') !!}</p>
                                    <div class="read-more">
                                        <a href="{{route('mukundpur.news-details', $news->slug)}}">{{ __('home.link-read-btn') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 col-md-12 p-0">
                        <div class="card h-100">
                            <div class="p-2 text-center">
                                <h2 style="font-weight: 600">{{ __('home.news-not-found') }}</h2>
                            </div><!-- single-post -->
                        </div><!-- card -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endforelse

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="all-news">
                        <a href="{{route('mukundpur.newses')}}">{{ __('home.link-all-news') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Latest News Area End Here -->

    <!-- Zooks Contact Start Here -->
    <div class="zooks-connact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-title">
                        <h2>{{ __('home.lets-connect-h2') }}</h2>
                    </div>
                    <div class="zooks-social-connect-area">
                        <ul>
                            <li><a href="http://www.facebook.com/whitetigersafari.in" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="http://www.twitter.com/WhiteTigerIn" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="http://www.instagram.com/whitetigersafari.in" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li> --}}
                        </ul>
                    </div>
                    <p>{{ __('home.lets-connect-para') }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Zooks Contact End Here -->

    <!-- Twiiter Post Area Start Here -->
    <div class="twitter-post-area">
        <div class="container-fluid acurate">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="single-post">
                        <a><img src="{{asset('public/assets/images/footer-post/DSC_0438.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-post">
                        <a><img src="{{asset('public/assets/images/footer-post/TICKELLS-BLUE-FLYCATCHER.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-post">
                        <a><img src="{{asset('public/assets/images/footer-post/vaccination.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-post">
                        <a><img src="{{asset('public/assets/images/footer-post/DSC_0385.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-post">
                        <a><img src="{{asset('public/assets/images/footer-post/YELLOW-PANSY.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Twiiter Post Area End Here -->
@endsection
<!-- Main Content Area End Here -->
