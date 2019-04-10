@extends('app')

@section('css')
    @stack('css')
    @yield('css')
@stop

@section('body')

    <div class="joc-loader"></div>
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
    <div id="page">
        @include('partials.navbar')
        @yield('top-content')


    </div>

    @yield('content')

    @include('partials.footer')

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

@stop
