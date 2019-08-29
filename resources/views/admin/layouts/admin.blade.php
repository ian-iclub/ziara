@extends('app')

@section('adminlte_css')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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

@stop

<div class="joc-loader"></div>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin') }}">
                Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-2 mr-auto">
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
                <ul class="navbar-nav mr-2 ml-auto" style="float: right;">
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
                            <a id="navbarDropdownMenuLink" class="nav-link dropdown-toggle" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}"> Visit site</a>
                                {{-- <hr> --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @section('body')
        @if(Session::has('success'))
            <div class="alert alert-dismissable alert-success fade in"
                 style="position:absolute;top:2%;right:50px;z-index:99;position:fixed">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>
                    {{ Session::get('success') }}
                </strong>
            </div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-dismissable alert-danger"
                 style="position:absolute;top:20px;right:30px;z-index:99;position:fixed">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>
                    {{ Session::get('error') }}
                </strong>
            </div>
        @endif

        @yield('content')

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
        </div>

    @stop

</div>
