{{-- @extends('app') --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <link rel="icon" href="{{ asset('images/sunlogo.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> --}}

    <!-- Magnific Popup -->
    {{-- <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"> --}}

    <!-- Flexslider  -->
    {{-- <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}"> --}}

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <!-- Date Picker -->
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}"> --}}
    <!-- Flaticons  -->
    {{-- <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}"> --}}

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>


    {{-- Added --}}
</head>
<body style="height:100%">


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
                    {{-- <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('places') }}">{{ __('Places') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('offers') }}">{{ __('Offers') }}</a>
                        </li>
                    </ul> --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('places') }}">{{ __('Places') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('offers') }}">{{ __('Offers') }}</a>
                            </li> -->
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('places') }}">{{ __('Places') }}</a>
                                </li>
                                <li class="nav-item" class="py-2">
                                    <a class="nav-link" href="{{ route('offers') }}">{{ __('Offers') }}</a>
                                </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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

        {{-- <main class="py-4">
            @yield('content')
        </main> --}}
        {{-- @yield('body') --}}
    </div>
    <main class="">
            @yield('content')
        </main>
</body>
{{-- @include('partials.footer') --}}

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>
</html>

<style>
    .navbar-laravel
    {
        /* background-color: #2C2E3E; */
        background-color: #E4A300;
    }
</style>
