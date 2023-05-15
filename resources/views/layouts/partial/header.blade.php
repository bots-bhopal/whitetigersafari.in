@push('css')
    <!-- Desktop Navbar Fixed Top Start Here -->
    <style>
        body {
            position: relative;
            display: block;
            height: auto;
            overflow-y: scroll;
        }

        #navbar-desktop {
            top: 0px;
            height: auto;
        }
    </style>
    <!-- Desktop Navbar Fixed Top End Here -->
@endpush

<!-- Floating Social Media Icons -->
<div class="social-icons">
    <a href="http://www.facebook.com/whitetigersafari.in" target="_blank" class="facebook"><i
            class="fa fa-facebook-f"></i>Facebook</a>
    <a href="http://www.twitter.com/WhiteTigerIn" target="_blank" class="twitter"><i
            class="fa fa-twitter"></i>Twitter</a>
    <a href="http://www.instagram.com/whitetigersafari.in" target="_blank" class="instagram"><i
            class="fa fa-instagram"></i>Instagram</a>
</div>

<!-- Header Start Here -->
<header>
    <div class="container">
        <div class="row">
            <div class="header-top">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div class="logo-area">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('public/assets/images/mukundpur-logo.png') }}" width="72" height="72"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <div class="header-top-right">
                        <nav>
                            <ul>
                                <li style="color: #fff">{{ __('navbar.phone') }}</li>
                                <li><a href="{{ url('home/contact-us') }}">{{ __('navbar.contact') }}</a></li>
                                <li class="nav-item dropdown">
                                    <!-- New Language Switcher -->
                                    <a class="nav-link" data-toggle="dropdown" href="#">
                                        {{ 'Language / भाषा :- ' . Config::get('languages')[App::getLocale()]['display'] }}
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right pt-1 pb-1">
                                        @foreach (Config::get('languages') as $lang => $language)
                                            @if ($lang != App::getLocale())
                                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"
                                                    style="color: #000;"><span
                                                        class="flag-icon flag-icon-{{ $language['flag-icon'] }}"
                                                        style="margin-right: 8px!important"></span>
                                                    {{ $language['display'] }}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="main-header">
                <nav id="navbar-desktop">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">{{ __('navbar.home') }}</a></li>
                        <li>
                            <a>{{ __('navbar.about') }} <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a
                                        href="{{ url('about/director-desk') }}">{{ __('navbar.director-desk') }}</a>
                                </li>
                                <li><a href="{{ url('/construction') }}">{{ __('navbar.about-the-zoo') }}</a></li>
                                <li><a href="{{ url('about/vision') }}">{{ __('navbar.vision-mission') }}</a></li>
                                <li><a href="{{ url('about/heritage') }}">{{ __('navbar.heritage-history') }}</a>
                                </li>
                                <li><a href="{{ url('about/foundation') }}">{{ __('navbar.foundation-day') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a>{{ __('navbar.visit') }} <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a href="{{ url('visit/timings') }}">{{ __('navbar.visiting-hours') }}</a>
                                </li>
                                <li><a href="{{ url('visit/ticket') }}">{{ __('navbar.tickets-pricing') }}</a>
                                </li>
                                <li><a
                                        href="{{ url('visit/special-attraction') }}">{{ __('navbar.special-attractions') }}</a>
                                </li>
                                <li><a href="{{ url('/construction') }}">{{ __('navbar.zoo-map') }}</a></li>
                                <li><a href="{{ url('visit/visitors') }}">{{ __('navbar.visitor-amenities') }}</a>
                                </li>
                                <li><a href="{{ url('visit/dos') }}">{{ __('navbar.dos-donts') }}</a></li>
                                <li><a href="{{ url('home/contact-us') }}">{{ __('navbar.how-to-reach') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a>{{ __('navbar.management') }} <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a
                                        href="{{ url('management/chart') }}">{{ __('navbar.organizational-chart') }}</a>
                                </li>
                                <li><a href="{{ url('management/human') }}">{{ __('navbar.human-resources') }}</a>
                                </li>
                                <li><a href="{{ url('management/rescue') }}">{{ __('navbar.rescue') }}</a></li>
                                <li><a href="{{ url('/construction') }}">{{ __('navbar.zoo-hospital') }}</a></li>
                            </ul>
                        </li>
                        <li>
                            <a>{{ __('navbar.animals') }} <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a href="{{ url('/construction') }}">{{ __('navbar.collection-plan') }}</a>
                                </li>
                                <li><a href="{{ url('animals/mammals') }}">{{ __('navbar.mammals') }}</a></li>
                                <li><a href="{{ url('animals/reptiles') }}">{{ __('navbar.reptiles') }}</a></li>
                                <li><a href="{{ url('animals/birds') }}">{{ __('navbar.birds') }}</a></li>
                                <li><a
                                        href="{{ url('animals/arrivals-borns') }}">{{ __('navbar.new-arrivals') }}</a>
                                </li>
                                <li><a href="{{ url('animals/enrichment') }}">{{ __('navbar.enrichment') }}</a>
                                </li>
                                <li><a href="{{ url('animals/ranging') }}">{{ __('navbar.ranging-animals') }}</a>
                                </li>
                                <li><a href="{{ url('animals/adoption') }}">{{ __('navbar.animal-adoption') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a>{{ __('navbar.news-corner') }} <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a
                                        href="{{ url('news/events-happenings') }}">{{ __('navbar.events-happenings') }}</a>
                                </li>
                                <li><a
                                        href="{{ url('news/education-programs') }}">{{ __('navbar.eductional-programs') }}</a>
                                </li>
                                <li><a href="{{ url('/construction') }}">{{ __('navbar.publications') }}</a></li>
                                <li><a href="{{ url('/construction') }}">{{ __('navbar.volunteers') }}</a></li>
                                <li><a href="{{ url('news/newses') }}">{{ __('navbar.news-corner') }}</a></li>
                                <li><a href="{{ url('news/events') }}">{{ __('navbar.event-corner') }}</a></li>
                                <li><a
                                        href="{{ url('news/training-programs') }}">{{ __('navbar.training-programs') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ url('home/gallery') }}">{{ __('navbar.gallery') }}</a></li>
                        <li style="background: #1b3a1f; border-radius: 4px;">
                            <a href="{{ asset('public/wts-certificate') }}"
                                style="display: inline-block; font-size: 18px; padding-right: 2px;"
                                target="_blank">Download
                                Certificate</a>
                            <img src="{{ asset('public/assets/images/new.gif') }}" alt="new"
                                style="display: inline-block; font-size: 18px; padding-right: 10px;">
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-area" style="position:absolute; top: 10px;">
                        <a href="#">
                            <img src="{{ asset('public/assets/images/mukundpur-logo.png') }}" width="72" height="72"
                                alt="">
                        </a>
                    </div>

                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li>
                                    <a>{{ __('navbar.language') }} <i class="fa fa-caret-down"
                                            aria-hidden="true"></i></a>
                                    <ul>
                                        <li>
                                            @foreach (Config::get('languages') as $lang => $language)
                                                @if ($lang != App::getLocale())
                                                    <a class="dropdown-item"
                                                        href="{{ route('lang.switch', $lang) }}"
                                                        style="color: #000;"><span
                                                            class="flag-icon flag-icon-{{ $language['flag-icon'] }}"
                                                            style="margin-right: 8px!important"></span>
                                                        {{ $language['display'] }}</a>
                                                @endif
                                            @endforeach
                                        </li>
                                    </ul>
                                </li>

                                <li class="active"><a href="{{ url('/') }}">{{ __('navbar.home') }}</a>
                                </li>
                                <li>
                                    <a>{{ __('navbar.about') }} <i class="fa fa-caret-down"
                                            aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a
                                                href="{{ url('about/director-desk') }}">{{ __('navbar.director-desk') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('/construction') }}">{{ __('navbar.about-the-zoo') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('about/vision') }}">{{ __('navbar.vision-mission') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('about/heritage') }}">{{ __('navbar.heritage-history') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('about/foundation') }}">{{ __('navbar.foundation-day') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>{{ __('navbar.visit') }} <i class="fa fa-caret-down"
                                            aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a
                                                href="{{ url('visit/timings') }}">{{ __('navbar.visiting-hours') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('visit/ticket') }}">{{ __('navbar.tickets-pricing') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('visit/special-attraction') }}">{{ __('navbar.special-attractions') }}}</a>
                                        </li>
                                        <li><a href="{{ url('/construction') }}">{{ __('navbar.zoo-map') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('visit/visitors') }}">{{ __('navbar.visitor-amenities') }}</a>
                                        </li>
                                        <li><a href="{{ url('visit/dos') }}">{{ __('navbar.dos-donts') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('home/contact-us') }}">{{ __('navbar.how-to-reach') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>{{ __('navbar.management') }} <i class="fa fa-caret-down"
                                            aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a
                                                href="{{ url('management/chart') }}">{{ __('navbar.organizational-chart') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('management/human') }}">{{ __('navbar.human-resources') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('management/rescue') }}">{{ __('navbar.rescue') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('/construction') }}">{{ __('navbar.zoo-hospital') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>{{ __('navbar.animals') }} <i class="fa fa-caret-down"
                                            aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a
                                                href="{{ url('/construction') }}">{{ __('navbar.collection-plan') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('animals/mammals') }}">{{ __('navbar.mammals') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('animals/reptiles') }}">{{ __('navbar.reptiles') }}</a>
                                        </li>
                                        <li><a href="{{ url('animals/birds') }}">{{ __('navbar.birds') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('animals/arrivals-borns') }}">{{ __('navbar.new-arrivals') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('animals/enrichment') }}">{{ __('navbar.enrichment') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('animals/ranging') }}">{{ __('navbar.ranging-animals') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('animals/adoption') }}">{{ __('navbar.animal-adoption') }}}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>{{ __('navbar.news-corner') }} <i class="fa fa-caret-down"
                                            aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a
                                                href="{{ url('news/events-happenings') }}">{{ __('navbar.events-happenings') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('news/education-programs') }}">{{ __('navbar.eductional-programs') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('/construction') }}">{{ __('navbar.publications') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('/construction') }}">{{ __('navbar.volunteers') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('news/newses') }}">{{ __('navbar.news-corner') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('news/events') }}">{{ __('navbar.event-corner') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ url('news/training-programs') }}">{{ __('navbar.training-programs') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('home/gallery') }}">{{ __('navbar.gallery') }}</a></li>
                                <li>
                                    <a href="{{ asset('public/wts-certificate') }}" target="_blank">Download
                                        Certificate
                                        <img src="{{ asset('public/assets/images/new.gif') }}" alt="new">
                                    </a>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End Here -->
