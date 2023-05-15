<!DOCTYPE html>
<html>
<html lang="{{ session('locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('public/assets/images/favicon.ico') }}">
    <title> WTS-@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('public/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/assets/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{ asset('public/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/dz/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/dz/custom-dz.css') }}">
    <!-- flag-icon-css -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- preloader-css -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- Toggle Switch -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!-- Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- MyStyle -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/mystyle.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @stack('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                @if (session('locale') == 'en')
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{ url('/') }}" class="nav-link" target="_blank">Go To Website</a>
                    </li>
                @endif

                @if (session('locale') == 'hi')
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{ url('/') }}" class="nav-link" target="_blank">वेबसाइट पर जाएं</a>
                    </li>
                @endif
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Language Dropdown Menu -->
                <li class="nav-item dropdown">
                    <!-- New Language Switcher -->
                    <a class="nav-link dropdown-toggle hover bdr" data-toggle="dropdown" href="#">
                        <img src="{{ asset('public/assets/images/icons/google-translate.png') }}" width="24"
                            height="24" alt="Google-Translate" class="img-fluid">
                        {{ Config::get('languages')[App::getLocale()]['display'] }}
                        <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right pt-1 pb-1">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span
                                        class="flag-icon flag-icon-{{ $language['flag-icon'] }}"
                                        style="margin-right: 8px!important"></span> {{ $language['display'] }}</a>
                            @endif
                        @endforeach
                    </div>
                </li>

                @if (session('locale') == 'en')
                    <!-- User Dropdown Menu -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-sign-out-alt"></i>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a> --}}

                                <a class="dropdown-item" onclick="logout();" style="cursor: pointer;">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                @endif

                @if (session('locale') == 'hi')
                    <!-- User Dropdown Menu -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-sign-out-alt"></i>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('लॉग आउट') }}
                            </a> --}}

                                <a class="dropdown-item" onclick="logout();" style="cursor: pointer;">
                                    {{ __('लॉग आउट') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                @endif
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-1">
            <!-- Brand Logo -->
            @if (Auth::user()->role->id == '3')
                <a href="{{ route('admin.dashboard') }}" class="brand-link">
                    <img src="{{ asset('public/assets/images/mukundpur-logo.png') }}" alt="WTS-Logo"
                        class="img-rounded brand-image">
                    <span class="brand-text font-weight-bold"
                        style="font-size: 20px;">{{ trans('navbar.name') }}</span>
                </a>
            @endif

            @if (Auth::user()->role->id == '2')
                <a href="{{ route('superadmin.dashboard') }}" class="brand-link">
                    <img src="{{ asset('public/assets/images/mukundpur-logo.png') }}" alt="WTS-Logo"
                        class="img-rounded brand-image">
                    <span class="brand-text font-weight-bold"
                        style="font-size: 20px;">{{ trans('navbar.name') }}</span>
                </a>
            @endif

            @if (Auth::user()->role->id == '1')
                <a href="{{ route('serveradmin.dashboard') }}" class="brand-link">
                    <img src="{{ asset('public/assets/images/mukundpur-logo.png') }}" alt="WTS-Logo"
                        class="img-rounded brand-image">
                    <span class="brand-text font-weight-bold"
                        style="font-size: 20px;">{{ trans('navbar.name') }}</span>
                </a>
            @endif


            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-3">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu"
                        data-accordion="true">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        @if (Request::is('admin*'))
                            @if (session('locale') == 'en')
                                <li class="nav-header">MAIN SYSTEM</li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-header">मुख्य प्रणाली</li>
                            @endif

                            @if (session('locale') == 'en')
                                <li class="nav-item">
                                    <a href="{{ route('admin.dashboard') }}"
                                        class="nav-link {{ 'admin/dashboard' == request()->path() ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>Dashboard <span
                                                class="right badge rounded-pill badge-info pt-1 pb-1 pl-2 pr-2">English</span>
                                        </p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-item">
                                    <a href="{{ route('admin.dashboard') }}"
                                        class="nav-link {{ 'admin/dashboard' == request()->path() ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>डैशबोर्ड <span
                                                class="right badge rounded-pill badge-info pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                        </p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li
                                    class="nav-item {{ Request::is('admin/newses*') || Request::is('admin/pending-news') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('admin/newses*') || Request::is('admin/pending-news') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-newspaper"></i>
                                        <p>
                                            News
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.newses.index') }}"
                                                class="nav-link {{ Request::is('admin/newses*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-clipboard-list"></i>
                                                <p>News List <span
                                                        class="right badge rounded-pill badge-primary pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.newses.pending') }}"
                                                class="nav-link {{ Request::is('admin/pending-news') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-copy"></i>
                                                <p>Pending News <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li
                                    class="nav-item {{ Request::is('admin/newses*') || Request::is('admin/pending-news') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('admin/newses*') || Request::is('admin/pending-news') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-newspaper"></i>
                                        <p>
                                            समाचार
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.newses.index') }}"
                                                class="nav-link {{ Request::is('admin/newses*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-clipboard-list"></i>
                                                <p>समाचार सूची <span
                                                        class="right badge rounded-pill badge-primary pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.newses.pending') }}"
                                                class="nav-link {{ Request::is('admin/pending-news') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-copy"></i>
                                                <p>अस्वीकृत समाचार <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li
                                    class="nav-item {{ Request::is('admin/events*') || Request::is('admin/pending-event') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('admin/events*') || Request::is('admin/pending-event') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-calendar-day"></i>
                                        <p>
                                            Event
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.events.index') }}"
                                                class="nav-link {{ Request::is('admin/events*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-clipboard-list"></i>
                                                <p>Event List <span
                                                        class="right badge rounded-pill badge-success pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.events.pending') }}"
                                                class="nav-link {{ Request::is('admin/pending-event') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-copy"></i>
                                                <p>Pending Events <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li
                                    class="nav-item {{ Request::is('admin/events*') || Request::is('admin/pending-event') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('admin/events*') || Request::is('admin/pending-event') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-newspaper"></i>
                                        <p>
                                            आयोजन
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.events.index') }}"
                                                class="nav-link {{ Request::is('admin/events*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-clipboard-list"></i>
                                                <p>आयोजन सूची <span
                                                        class="right badge rounded-pill badge-success pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.events.pending') }}"
                                                class="nav-link {{ Request::is('admin/pending-event') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-copy"></i>
                                                <p>अस्वीकृत आयोजन <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li
                                    class="nav-item {{ Request::is('admin/images*') || Request::is('admin/pending-images') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('admin/images*') || Request::is('admin/pending-images') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-image"></i>
                                        <p>
                                            Gallery
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.images.index') }}"
                                                class="nav-link {{ Request::is('admin/images*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-film"></i>
                                                <p>Image List <span
                                                        class="right badge rounded-pill badge-warning pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.images.pending') }}"
                                                class="nav-link {{ Request::is('admin/pending-images') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-images"></i>
                                                <p>Pending Images <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li
                                    class="nav-item {{ Request::is('admin/images*') || Request::is('admin/pending-images') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('admin/images*') || Request::is('admin/pending-images') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-image"></i>
                                        <p>
                                            गैलरी
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.images.index') }}"
                                                class="nav-link {{ Request::is('admin/images*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-film"></i>
                                                <p>इमेज सूची <span
                                                        class="right badge rounded-pill badge-warning pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.images.pending') }}"
                                                class="nav-link {{ Request::is('admin/pending-images') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-images"></i>
                                                <p>अस्वीकृत इमेज <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            {{-- @if (session('locale') == 'en')
                        <li class="nav-item {{ Request::is('admin/tender*') || Request::is('admin/pending-tenders') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('admin/tender*') || Request::is('admin/pending-tenders') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-file-upload"></i>
                                <p>
                                    Tenders
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.tender.index') }}" class="nav-link {{ Request::is('admin/tender*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>Tender List <span class="right badge rounded-pill badge-success pt-1 pb-1 pl-2 pr-2">English</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.tender.pending') }}" class="nav-link {{ Request::is('admin/pending-tenders') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>Pending Tenders <span class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if (session('locale') == 'hi')
                        <li class="nav-item {{ Request::is('admin/tender*') || Request::is('admin/pending-tenders') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('admin/tender*') || Request::is('admin/pending-tenders') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-file-upload"></i>
                                <p>
                                    निविदाएं
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.tender.index') }}" class="nav-link {{ Request::is('admin/tender*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>निविदा सूची <span class="right badge rounded-pill badge-success pt-1 pb-1 pl-2 pr-2">हिंदी</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.tender.pending') }}" class="nav-link {{ Request::is('admin/pending-tenders') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>अस्वीकृत निविदाएं <span class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if (session('locale') == 'en')
                        <li class="nav-item {{ Request::is('admin/document*') || Request::is('admin/pending-documents') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('admin/document*') || Request::is('admin/pending-documents') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cloud-upload-alt"></i>
                                <p>
                                    Other Docs
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.document.index') }}" class="nav-link {{ Request::is('admin/document*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>Document List <span class="right badge rounded-pill badge-secondary pt-1 pb-1 pl-2 pr-2">English</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.document.pending') }}" class="nav-link {{ Request::is('admin/pending-documents') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>Pending Docs <span class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if (session('locale') == 'hi')
                        <li class="nav-item {{ Request::is('admin/document*') || Request::is('admin/pending-documents') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('admin/document*') || Request::is('admin/pending-documents') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cloud-upload-alt"></i>
                                <p>
                                    अन्य दस्तावेज़
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.document.index') }}" class="nav-link {{ Request::is('admin/document*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>दस्तावेज़ सूची <span class="right badge rounded-pill badge-secondary pt-1 pb-1 pl-2 pr-2">हिंदी</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.document.pending') }}" class="nav-link {{ Request::is('admin/pending-documents') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>अस्वीकृत दस्तावेज़ <span class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif --}}

                            @if (session('locale') == 'en')
                                <li class="nav-header">ADMIN SYSTEM</li>
                                <li
                                    class="nav-item {{ Request::is('admin/profile') || Request::is('admin/changePassword') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('admin/profile') || Request::is('admin/changePassword') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-user-cog"></i>
                                        <p>
                                            Admin Settings
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.profile') }}"
                                                class="nav-link {{ Request::is('admin/profile') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>User Profile</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.changePassword') }}"
                                                class="nav-link {{ Request::is('admin/changePassword') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Change Password</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-header">व्यवस्थापक प्रणाली</li>
                                <li
                                    class="nav-item {{ Request::is('admin/profile') || Request::is('admin/changePassword') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('admin/profile') || Request::is('admin/changePassword') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-user-cog"></i>
                                        <p>
                                            व्यवस्थापक सेटिंग्स
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.profile.update') }}"
                                                class="nav-link {{ Request::is('admin/profile') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>उपयोगकर्ता प्रोफ़ाइल</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.changePassword') }}"
                                                class="nav-link {{ Request::is('admin/changePassword') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>पासवर्ड बदलें</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li class="nav-item">
                                    <a onclick="logout();" class="nav-link" style="cursor: pointer;">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>
                                            Logout
                                        </p>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-item">
                                    <a onclick="logout();" class="nav-link" style="cursor: pointer;">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>
                                            लॉग आउट
                                        </p>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endif
                        @endif

                        @if (Request::is('superadmin*'))
                            @if (session('locale') == 'en')
                                <li class="nav-header">MAIN SYSTEM</li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-header">मुख्य प्रणाली</li>
                            @endif

                            @if (session('locale') == 'en')
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.dashboard') }}"
                                        class="nav-link {{ 'superadmin/dashboard' == request()->path() ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>Dashboard <span
                                                class="right badge rounded-pill badge-info pt-1 pb-1 pl-2 pr-2">English</span>
                                        </p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.dashboard') }}"
                                        class="nav-link {{ 'superadmin/dashboard' == request()->path() ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>डैशबोर्ड <span
                                                class="right badge rounded-pill badge-info pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                        </p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li
                                    class="nav-item {{ Request::is('superadmin/newses*') || Request::is('superadmin/pending-news') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('superadmin/newses*') || Request::is('superadmin/pending-news') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-newspaper"></i>
                                        <p>
                                            News
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.newses.index') }}"
                                                class="nav-link {{ Request::is('superadmin/newses*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-clipboard-list"></i>
                                                <p>News List <span
                                                        class="right badge rounded-pill badge-primary pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.newses.pending') }}"
                                                class="nav-link {{ Request::is('superadmin/pending-news') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-copy"></i>
                                                <p>Pending News <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li
                                    class="nav-item {{ Request::is('superadmin/newses*') || Request::is('superadmin/pending-news') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('superadmin/newses*') || Request::is('superadmin/pending-news') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-newspaper"></i>
                                        <p>
                                            समाचार
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.newses.index') }}"
                                                class="nav-link {{ Request::is('superadmin/newses*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-clipboard-list"></i>
                                                <p>समाचार सूची <span
                                                        class="right badge rounded-pill badge-primary pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.newses.pending') }}"
                                                class="nav-link {{ Request::is('superadmin/pending-news') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-copy"></i>
                                                <p>अस्वीकृत समाचार <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li
                                    class="nav-item {{ Request::is('superadmin/events*') || Request::is('superadmin/pending-event') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('superadmin/events*') || Request::is('superadmin/pending-event') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-calendar-day"></i>
                                        <p>
                                            Event
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.events.index') }}"
                                                class="nav-link {{ Request::is('superadmin/events*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-clipboard-list"></i>
                                                <p>Event List <span
                                                        class="right badge rounded-pill badge-primary pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.events.pending') }}"
                                                class="nav-link {{ Request::is('superadmin/pending-event') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-copy"></i>
                                                <p>Pending Events <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li
                                    class="nav-item {{ Request::is('superadmin/events*') || Request::is('superadmin/pending-event') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('superadmin/events*') || Request::is('superadmin/pending-event') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-newspaper"></i>
                                        <p>
                                            आयोजन
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.events.index') }}"
                                                class="nav-link {{ Request::is('superadmin/events*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-clipboard-list"></i>
                                                <p>आयोजन सूची <span
                                                        class="right badge rounded-pill badge-primary pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.events.pending') }}"
                                                class="nav-link {{ Request::is('superadmin/pending-event') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-copy"></i>
                                                <p>अस्वीकृत आयोजन <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li
                                    class="nav-item {{ Request::is('superadmin/images*') || Request::is('superadmin/pending-images') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('superadmin/images*') || Request::is('superadmin/pending-images') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-image"></i>
                                        <p>
                                            Gallery
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.images.index') }}"
                                                class="nav-link {{ Request::is('superadmin/images*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-film"></i>
                                                <p>Image List <span
                                                        class="right badge rounded-pill badge-warning pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.images.pending') }}"
                                                class="nav-link {{ Request::is('superadmin/pending-images') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-images"></i>
                                                <p>Pending Images <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li
                                    class="nav-item {{ Request::is('superadmin/images*') || Request::is('superadmin/pending-images') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('superadmin/images*') || Request::is('superadmin/pending-images') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-image"></i>
                                        <p>
                                            गैलरी
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.images.index') }}"
                                                class="nav-link {{ Request::is('superadmin/images*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-film"></i>
                                                <p>इमेज सूची <span
                                                        class="right badge rounded-pill badge-warning pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.images.pending') }}"
                                                class="nav-link {{ Request::is('superadmin/pending-images') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-images"></i>
                                                <p>अस्वीकृत इमेज <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            {{-- @if (session('locale') == 'en')
                        <li class="nav-item {{ Request::is('superadmin/tender*') || Request::is('superadmin/pending-tenders') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('superadmin/tender*') || Request::is('superadmin/pending-tenders') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-file-upload"></i>
                                <p>
                                    Tenders
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.tender.index') }}" class="nav-link {{ Request::is('superadmin/tender*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>Tender List <span class="right badge rounded-pill badge-success pt-1 pb-1 pl-2 pr-2">English</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.tender.pending') }}" class="nav-link {{ Request::is('superadmin/pending-tenders') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>Pending Tenders <span class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if (session('locale') == 'hi')
                        <li class="nav-item {{ Request::is('superadmin/tender*') || Request::is('superadmin/pending-tenders') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('superadmin/tender*') || Request::is('superadmin/pending-tenders') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-file-upload"></i>
                                <p>
                                    निविदाएं
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.tender.index') }}" class="nav-link {{ Request::is('superadmin/tender*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>निविदा सूची <span class="right badge rounded-pill badge-success pt-1 pb-1 pl-2 pr-2">हिंदी</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.tender.pending') }}" class="nav-link {{ Request::is('superadmin/pending-tenders') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>अस्वीकृत निविदाएं <span class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if (session('locale') == 'en')
                        <li class="nav-item {{ Request::is('superadmin/document*') || Request::is('superadmin/pending-documents') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('superadmin/document*') || Request::is('superadmin/pending-documents') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cloud-upload-alt"></i>
                                <p>
                                    Other Docs
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.document.index') }}" class="nav-link {{ Request::is('superadmin/document*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>Document List <span class="right badge rounded-pill badge-secondary pt-1 pb-1 pl-2 pr-2">English</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.document.pending') }}" class="nav-link {{ Request::is('superadmin/pending-documents') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>Pending Docs <span class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if (session('locale') == 'hi')
                        <li class="nav-item {{ Request::is('superadmin/document*') || Request::is('superadmin/pending-documents') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('superadmin/document*') || Request::is('superadmin/pending-documents') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cloud-upload-alt"></i>
                                <p>
                                    अन्य दस्तावेज़
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.document.index') }}" class="nav-link {{ Request::is('superadmin/document*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>दस्तावेज़ सूची <span class="right badge rounded-pill badge-secondary pt-1 pb-1 pl-2 pr-2">हिंदी</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.document.pending') }}" class="nav-link {{ Request::is('superadmin/pending-documents') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>अस्वीकृत दस्तावेज़ <span class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif --}}

                            @if (session('locale') == 'en')
                                <li class="nav-header">ADMINS LIST</li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-header">व्यवस्थापक सूची</li>
                            @endif

                            @if (session('locale') == 'en')
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.adminList') }}"
                                        class="nav-link {{ 'superadmin/adminList' == request()->path() ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-clipboard-list"></i>
                                        <p>Admins List <span
                                                class="right badge rounded-pill badge-primary pt-1 pb-1 pl-2 pr-2">English</span>
                                        </p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.adminList') }}"
                                        class="nav-link {{ 'superadmin/adminList' == request()->path() ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-clipboard-list"></i>
                                        <p>व्यवस्थापक सूची <span
                                                class="right badge rounded-pill badge-primary pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                        </p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li class="nav-header">SUPER ADMIN SYSTEM</li>
                                <li
                                    class="nav-item {{ Request::is('superadmin/profile') || Request::is('superadmin/changePassword') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('superadmin/profile') || Request::is('superadmin/changePassword') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-user-cog"></i>
                                        <p>
                                            Super Admin Settings
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.profile') }}"
                                                class="nav-link {{ Request::is('superadmin/profile') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>User Profile</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.changePassword') }}"
                                                class="nav-link {{ Request::is('superadmin/changePassword') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Change Password</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-header">सुपर व्यवस्थापक प्रणाली</li>
                                <li
                                    class="nav-item {{ Request::is('superadmin/profile') || Request::is('superadmin/changePassword') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('superadmin/profile') || Request::is('superadmin/changePassword') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-user-cog"></i>
                                        <p>
                                            व्यवस्थापक सेटिंग्स
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.profile') }}"
                                                class="nav-link {{ Request::is('superadmin/profile') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>उपयोगकर्ता प्रोफ़ाइल</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('superadmin.changePassword') }}"
                                                class="nav-link {{ Request::is('superadmin/changePassword') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>पासवर्ड बदलें</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li class="nav-item">
                                    <a onclick="logout();" class="nav-link" style="cursor: pointer;">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>
                                            Logout
                                        </p>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-item">
                                    <a onclick="logout();" class="nav-link" style="cursor: pointer;">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>
                                            लॉग आउट
                                        </p>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endif
                        @endif

                        @if (Request::is('serveradmin*'))
                            @if (session('locale') == 'en')
                                <li class="nav-header">MAIN SYSTEM</li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-header">मुख्य प्रणाली</li>
                            @endif

                            @if (session('locale') == 'en')
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.dashboard') }}"
                                        class="nav-link {{ 'serveradmin/dashboard' == request()->path() ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>Dashboard <span
                                                class="right badge rounded-pill badge-info pt-1 pb-1 pl-2 pr-2">English</span>
                                        </p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.dashboard') }}"
                                        class="nav-link {{ 'serveradmin/dashboard' == request()->path() ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>डैशबोर्ड <span
                                                class="right badge rounded-pill badge-info pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                        </p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li
                                    class="nav-item {{ Request::is('serveradmin/newses*') || Request::is('serveradmin/pending-news') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('serveradmin/newses*') || Request::is('serveradmin/pending-news') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-newspaper"></i>
                                        <p>
                                            News
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.newses.index') }}"
                                                class="nav-link {{ Request::is('serveradmin/newses*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-clipboard-list"></i>
                                                <p>News List <span
                                                        class="right badge rounded-pill badge-primary pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.newses.pending') }}"
                                                class="nav-link {{ Request::is('serveradmin/pending-news') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-copy"></i>
                                                <p>Pending News <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li
                                    class="nav-item {{ Request::is('serveradmin/newses*') || Request::is('serveradmin/pending-news') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('serveradmin/newses*') || Request::is('serveradmin/pending-news') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-newspaper"></i>
                                        <p>
                                            समाचार
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.newses.index') }}"
                                                class="nav-link {{ Request::is('serveradmin/newses*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-clipboard-list"></i>
                                                <p>समाचार सूची <span
                                                        class="right badge rounded-pill badge-primary pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.newses.pending') }}"
                                                class="nav-link {{ Request::is('serveradmin/pending-news') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-copy"></i>
                                                <p>अस्वीकृत समाचार <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li
                                    class="nav-item {{ Request::is('serveradmin/events*') || Request::is('serveradmin/pending-event') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('serveradmin/events*') || Request::is('serveradmin/pending-event') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-calendar-day"></i>
                                        <p>
                                            Event
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.events.index') }}"
                                                class="nav-link {{ Request::is('serveradmin/events*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-clipboard-list"></i>
                                                <p>Event List <span
                                                        class="right badge rounded-pill badge-success pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.events.pending') }}"
                                                class="nav-link {{ Request::is('serveradmin/pending-event') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-copy"></i>
                                                <p>Pending Events <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li
                                    class="nav-item {{ Request::is('serveradmin/events*') || Request::is('serveradmin/pending-event') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('serveradmin/events*') || Request::is('serveradmin/pending-event') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-newspaper"></i>
                                        <p>
                                            आयोजन
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.events.index') }}"
                                                class="nav-link {{ Request::is('serveradmin/events*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-clipboard-list"></i>
                                                <p>आयोजन सूची <span
                                                        class="right badge rounded-pill badge-success pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.events.pending') }}"
                                                class="nav-link {{ Request::is('serveradmin/pending-event') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-copy"></i>
                                                <p>अस्वीकृत आयोजन <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li
                                    class="nav-item {{ Request::is('serveradmin/images*') || Request::is('serveradmin/pending-images') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('serveradmin/images*') || Request::is('serveradmin/pending-images') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-image"></i>
                                        <p>
                                            Gallery
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.images.index') }}"
                                                class="nav-link {{ Request::is('serveradmin/images*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-film"></i>
                                                <p>Image List <span
                                                        class="right badge rounded-pill badge-warning pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.images.pending') }}"
                                                class="nav-link {{ Request::is('serveradmin/pending-images') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-images"></i>
                                                <p>Pending Images <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li
                                    class="nav-item {{ Request::is('serveradmin/images*') || Request::is('serveradmin/pending-images') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('serveradmin/images*') || Request::is('serveradmin/pending-images') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-image"></i>
                                        <p>
                                            गैलरी
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.images.index') }}"
                                                class="nav-link {{ Request::is('serveradmin/images*') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-film"></i>
                                                <p>इमेज सूची <span
                                                        class="right badge rounded-pill badge-warning pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.images.pending') }}"
                                                class="nav-link {{ Request::is('serveradmin/pending-images') ? 'active' : '' }}">
                                                <i class="nav-icon fas fa-images"></i>
                                                <p>अस्वीकृत इमेज <span
                                                        class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            {{-- @if (session('locale') == 'en')
                        <li class="nav-item {{ Request::is('serveradmin/tender*') || Request::is('serveradmin/pending-tenders') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('serveradmin/tender*') || Request::is('serveradmin/pending-tenders') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-file-upload"></i>
                                <p>
                                    Tenders
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.tender.index') }}" class="nav-link {{ Request::is('serveradmin/tender*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>Tender List <span class="right badge rounded-pill badge-success pt-1 pb-1 pl-2 pr-2">English</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.tender.pending') }}" class="nav-link {{ Request::is('serveradmin/pending-tenders') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>Pending Tenders <span class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if (session('locale') == 'hi')
                        <li class="nav-item {{ Request::is('serveradmin/tender*') || Request::is('serveradmin/pending-tenders') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('serveradmin/tender*') || Request::is('serveradmin/pending-tenders') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-file-upload"></i>
                                <p>
                                    निविदाएं
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.tender.index') }}" class="nav-link {{ Request::is('serveradmin/tender*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>निविदा सूची <span class="right badge rounded-pill badge-success pt-1 pb-1 pl-2 pr-2">हिंदी</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.tender.pending') }}" class="nav-link {{ Request::is('serveradmin/pending-tenders') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>अस्वीकृत निविदाएं <span class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if (session('locale') == 'en')
                        <li class="nav-item {{ Request::is('serveradmin/document*') || Request::is('serveradmin/pending-documents') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('serveradmin/document*') || Request::is('serveradmin/pending-documents') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cloud-upload-alt"></i>
                                <p>
                                    Other Docs
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.document.index') }}" class="nav-link {{ Request::is('serveradmin/document*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>Document List <span class="right badge rounded-pill badge-secondary pt-1 pb-1 pl-2 pr-2">English</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.document.pending') }}" class="nav-link {{ Request::is('serveradmin/pending-documents') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>Pending Docs <span class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">English</span></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if (session('locale') == 'hi')
                        <li class="nav-item {{ Request::is('serveradmin/document*') || Request::is('serveradmin/pending-documents') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('serveradmin/document*') || Request::is('serveradmin/pending-documents') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cloud-upload-alt"></i>
                                <p>
                                    अन्य दस्तावेज़
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.document.index') }}" class="nav-link {{ Request::is('serveradmin/document*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>दस्तावेज़ सूची <span class="right badge rounded-pill badge-secondary pt-1 pb-1 pl-2 pr-2">हिंदी</span></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.document.pending') }}" class="nav-link {{ Request::is('serveradmin/pending-documents') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-file-alt"></i>
                                        <p>अस्वीकृत दस्तावेज़ <span class="right badge rounded-pill badge-danger pt-1 pb-1 pl-2 pr-2">हिंदी</span></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif --}}

                            @if (session('locale') == 'en')
                                <li class="nav-header">SUPER ADMINS LIST</li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-header">सुपर व्यवस्थापक सूची</li>
                            @endif

                            @if (session('locale') == 'en')
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.superAdminList') }}"
                                        class="nav-link {{ 'serveradmin/superAdminList' == request()->path() ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-clipboard-list"></i>
                                        <p>Superadmin List <span
                                                class="right badge rounded-pill badge-light pt-1 pb-1 pl-2 pr-2">English</span>
                                        </p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.superAdminList') }}"
                                        class="nav-link {{ 'serveradmin/superAdminList' == request()->path() ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-clipboard-list"></i>
                                        <p>सुपरव्यवस्थापक सूची <span
                                                class="right badge rounded-pill badge-light pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                        </p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li class="nav-header">ADMINS LIST</li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-header">व्यवस्थापक सूची</li>
                            @endif

                            @if (session('locale') == 'en')
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.adminList') }}"
                                        class="nav-link {{ 'serveradmin/adminList' == request()->path() ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-clipboard-list"></i>
                                        <p>Admins List <span
                                                class="right badge rounded-pill badge-primary pt-1 pb-1 pl-2 pr-2">English</span>
                                        </p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-item">
                                    <a href="{{ route('serveradmin.adminList') }}"
                                        class="nav-link {{ 'serveradmin/adminList' == request()->path() ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-clipboard-list"></i>
                                        <p>व्यवस्थापक सूची <span
                                                class="right badge rounded-pill badge-primary pt-1 pb-1 pl-2 pr-2">हिंदी</span>
                                        </p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li class="nav-header">SERVER ADMIN SYSTEM</li>
                                <li
                                    class="nav-item {{ Request::is('serveradmin/profile') || Request::is('serveradmin/changePassword') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('serveradmin/profile') || Request::is('serveradmin/changePassword') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-user-cog"></i>
                                        <p>
                                            Server Admin Settings
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.profile') }}"
                                                class="nav-link {{ Request::is('serveradmin/profile') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>User Profile</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('serveradmin.changePassword') }}"
                                                class="nav-link {{ Request::is('serveradmin/changePassword') ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Change Password</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-header">सर्वर व्यवस्थापक प्रणाली</li>
                                <li
                                    class="nav-item {{ 'serveradmin/profile' == request()->path() || 'serveradmin/changePassword' == request()->path() ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ Request::is('serveradmin/profile') || Request::is('serveradmin/changePassword') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-user-cog"></i>
                                        <p>
                                            व्यवस्थापक सेटिंग्स
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('serveradmin/profile') }}"
                                                class="nav-link {{ 'serveradmin/profile' == request()->path() ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>उपयोगकर्ता प्रोफ़ाइल</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('serveradmin/changePassword') }}"
                                                class="nav-link {{ 'serveradmin/changePassword' == request()->path() ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>पासवर्ड बदलें</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li class="nav-item">
                                    <a onclick="logout();" class="nav-link" style="cursor: pointer;">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>
                                            Logout
                                        </p>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-item">
                                    <a onclick="logout();" class="nav-link" style="cursor: pointer;">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>
                                            लॉग आउट
                                        </p>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endif
                        @endif
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <main class="">
                @yield('content')
            </main>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            {{ trans('footer.cpyright') }} ©&nbsp; {{ date('Y') }}
            @if (Auth::user()->role->id == '3')
                <strong><a href="{{ route('admin.dashboard') }}">{{ trans('navbar.name') }}</a>.</strong>
            @endif
            @if (Auth::user()->role->id == '2')
                <strong><a href="{{ route('superadmin.dashboard') }}">{{ trans('navbar.name') }}</a>.</strong>
            @endif
            @if (Auth::user()->role->id == '1')
                <strong><a href="{{ route('serveradmin.dashboard') }}">{{ trans('navbar.name') }}</a>.</strong>
            @endif
            &nbsp;{{ trans('footer.copyright') }}
        </footer>

    </div>
    <!-- ./wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('panel.logout-modal-title') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ __('panel.logout-modal-body') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">{{ __('panel.logout-modal-btn-cancel') }}</button>
                    <button type="button" class="btn btn-danger"
                        id="logout">{{ __('panel.logout-modal-btn-yes') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Modal -->

    <!-- jQuery -->
    <script src="{{ asset('public/assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('public/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('public/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- Dropzone JS -->
    <script src="{{ asset('public/assets/dz/dropzone.min.js') }}"></script>
    <script src="{{ asset('public/assets/dz/custom-dz.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('public/assets/dist/js/adminlte.js') }}"></script>
    <!-- CKEDITOR -->
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
    <!-- Clipboard -->
    <script src="{{ asset('public/assets/js/clipboard.min.js') }}"></script>
    <!-- My Script -->
    <script src="{{ asset('public/assets/js/my-script.js') }}"></script>
    <!-- Toggle Switch -->
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script type="text/javascript">
        // Logout Function
        function logout() {
            $("#logoutModal").modal('show');

            document.getElementById("logout").addEventListener("click", function() {
                event.preventDefault();
                document.getElementById('logout-form').submit();
            });
        }

        $(document).ready(function() {
            //Alert
            setTimeout(function() {
                $('.alert').slideUp('slow');
            }, 4000);

            // Initialize CKEDITOR
            $('.ckeditor').ckeditor();
        });
    </script>

    <script>
        toastr.options = {
            "closeButton": true,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    @if (session('success'))
        <script>
            toastr.success("{!! session('success') !!}")
        </script>
    @endif
    @if (session('error'))
        <script>
            toastr.error("{!! session('error') !!}")
        </script>
    @endif

    @stack('js')
</body>

</html>
