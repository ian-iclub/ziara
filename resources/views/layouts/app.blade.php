<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ziara') }} - Admin</title>
        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <link rel="icon" href="{{ asset('images/sunlogo.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Added --}}
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

    @yield('css')
    {{-- Added --}}
</head>
<body>

<style>

    body {
        font-size: 14px;
    }

    .navbar-laravel {
        background-color: #E4A300;
    }

    .navbar-brand {
        float: left;
        padding: 17.5px 15px;
        font-size: 18px;
        line-height: 20px;
        height: 55px;
    }

    .nav-link, .dropdown-menu {
        font-size: 14px;
    }

</style>


<div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    Back Home
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('places.index') }}">{{ __('Places') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('offers.index') }}">{{ __('Offers') }}</a>
                            </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="float: right;">
                        <!-- Authentication Links -->
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="carets"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    </div>

    @yield('body')

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <!-- Owl carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup-options.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <!-- Stellar Parallax -->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Main -->
    <script src="{{ asset('js/main.js') }}"></script>

    {{--    <!-- <script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>--}}
    {{--    <script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js') }}"></script>--}}
    {{--    <script src="{{ asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script> -->--}}

    @yield('js')
</body>
</html>
