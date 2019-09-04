@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        {{--        <div class="row">--}}
        {{--            <div class="col-md-6 col-md-offset-3 text-center joc-heading animate-box">--}}
        {{--                <h2>Our Offers  </h2>--}}
        {{--                 <p>Enjoy our exclusive offers</p>--}}
        {{--                <h2 style="font-size:30px;color: #E4A300;">Early Bird Offers!</h2>--}}
        {{--                <small>Bookings should be completed by end of April for the rates to be valid.</small>--}}

        {{--            </div>--}}
        {{--        </div>--}}
        <div class="row">
            <div class="col-md-12 animate-box">
                    @forelse($offers as $offer)
                <div class="owl-carousel">
                        <div class="item">
                            <div class="hotel-entry">
                                <a class="hotel-img"
                                   style="background-image: url({{ Storage::url($offer['image_url']) }}), url({{ asset('images/sunlogo.png') }});">
                                    <p class="price">
                                        <span>
                                            {{ $offer->period }}
                                        </span><small></small>
                                    </p>
                                </a>
                                <div class="desc">
                                    <h3><a href="#">{{ $offer['title'] }}</a></h3>
                                    <span class="place">{{ $offer['location'] }}</span>
                                    {{--                                <p>{{ $offer['active_offers'] }}</p>--}}
                                    <p>
                                    {{--                                    {{ $offer['activeOffers'] }}--}}
                                    @foreach($offer['activeOffers'] as $type)
                                        <h4 class="desc-price">{{$type['currency'] . ' ' . number_format($type['price'], 0)}}</h4>
                                        <p class="desc-content">{{$type['details']}}</p>
                                        @endforeach
                                        </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h4>No offers available at the moment. <br>Add some to view how the will be displayed.</h4>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
@endsection

{{--@section('adminlte_css')--}}
{{--    <style>--}}
{{--    .admin-home--}}
{{--    {--}}
{{--        /* height: 100vh; */--}}
{{--    }--}}

{{--    </style>--}}
{{--@stop--}}

