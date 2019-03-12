@extends('app')

@section('css')
    @stack('css')
    @yield('css')
@stop

@section('body')

    <div class="joc-loader"></div>

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
