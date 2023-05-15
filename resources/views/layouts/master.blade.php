<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MMSJ White Tiger Safari and Zoo @yield('title')</title>
        <meta name="description" content="Maharaja Martand Singh Judeo White Tiger Safari and Zoo is located in Mukundpur of Satna district of Rewa division.The main attraction here is the White Tiger Safari in which people can the revered White Tigers in their natural environment. White Tiger Safari Ticket Price , Contact Number, Timings can be found at this website."/>
        <meta name="keywords" content="White Tiger Safari, White Tiger Safari Rewa, White Tiger Safari Rewa Ticket Price, White Tiger Safari Rewa Contact Number, White Tiger Safari Mukundpur, White Tiger Safari Rewa Official Website, White Tiger Rewa, Tiger Safari, Mukundpur Tiger Safari, Rewa White Tiger Safari, Satna White Tiger Safari, White Tiger Safari Satna, White Tiger Safari Satna"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/favicon.ico')}}">
        <link rel="apple-touch-icon" href="{{asset('public/assets/images/favicon.ico')}}">
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
        <!-- flaticon css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/flaticon.css')}}">
        <!-- flag-icon-css -->
        <link rel="stylesheet" href="{{asset('public/assets/plugins/flag-icon-css/css/flag-icon.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/animate.css')}}">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/jquery-ui.min.css')}}">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/meanmenu.min.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/owl.carousel.css')}}">
        <!-- fancybox -->
        <link rel="stylesheet" href="{{asset('public/assets/css/jquery.fancybox.min.css')}}">
        <!-- magnific-popup css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/magnific-popup.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/font-awesome.css')}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('public/assets/css/mystyle.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/responsive.css')}}">
        <!-- modernizr css -->
        <script src="{{asset('public/assets/js/modernizr-2.8.3.min.js')}}"></script>
        @stack('css')
    </head>
    <body>

        @include('layouts.partial.header')

        <!-- Main Section Area Start Here -->
        <main id="mukundpur-content">
            @yield('content')
        </main>
        <!-- Main Section Area End Here -->

        @include('layouts.partial.footer')

        <!-- jquery latest version -->
        <script src="{{asset('public/assets/js/jquery-1.12.0.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
        <!-- meanmenu js -->
        <script src="{{asset('public/assets/js/jquery.meanmenu.js')}}"></script>
        <!-- jquery-ui js -->
        <script src="{{asset('public/assets/js/jquery-ui.min.js')}}"></script>
        <!-- fancybox js -->
        <script src="{{asset('public/assets/js/jquery.fancybox.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('public/assets/js/wow.min.js')}}"></script>
        <!-- lazyload js -->
        <script src="{{asset('public/assets/js/lazyload.js')}}"></script>
        <!-- magnific-popup js -->
        <script src="{{asset('public/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- plugins js -->
        <script src="{{asset('public/assets/js/plugins.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('public/assets/js/main.js')}}"></script>
        <!-- Map Settings -->
        <script src="{{asset('public/assets/js/map-settings.js')}}"></script>
        @stack('js')
    </body>
</html>
