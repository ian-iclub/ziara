@extends('page')

@section('top-content')
@include('partials.slider')
@stop

@section('content')

<!-- Offers -->
{{-- <div class="joc-tour joc-light-grey" style="display:none">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center joc-heading animate-box">
                <h2>Our Offers</h2>
                <p style="font-size:20px">Enjoy our array of offers</p>
            </div>
        </div>
    </div>
    <div class="tour-wrap">

        @forelse($offers as $offer)
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img" style="background-image: url({{ $offer['image'] }});">
                </div>
                <span class="desc">
                    <p class="star"><span>
                        @for ($i = 0; $i < 5; $i++)
                            @for ($i; $i < $offer['stars']; $i++)
                                <i class="icon-star-full"></i>
                            @endfor
                            <i class="icon-star"></i>
                        @endfor
                    </span> {{ $offer['reviews'] }} Reviews</p>
                    <h2>{{ $offer['title'] }}</h2>
                    <span class="city">{{ $offer['place'] }}</span>
                    <span class="price">${{ $offer['price'] }}</span>
                </span>
            </a>
        @empty
            <p>No offers</p>
        @endforelse
    </div>
</div> --}}
<!-- Offers -->

<!-- Offers alternative -->
<div id="joc-hotel">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center joc-heading animate-box">
                <h2>Our Offers</h2>
                {{-- <p>Enjoy our exclusive offers</p> --}}
                <h2 style="font-size:30px;color: #E4A300;">Early Bird Offers!</h2>
                <small>Bookings should be completed by end of April for the rates to be valid.</small>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animate-box">
                <div class="owl-carousel">
                    @forelse($offers as $offer)
                        <div class="item">
                            <div class="hotel-entry">
                                <a class="hotel-img"
                                   style="background-image: url({{ Storage::url($offer['image_url']) }});">
                                    <p class="price"><span>{{ $offer->activeOffers[0]->period }}</span><small></small>
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
                        <p>No offers available at the moment. <br>Please check back later.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offers alternative -->

@stop
