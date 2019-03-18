@extends('page')

@section('top-content')
@include('partials.slider')
@stop

@section('content')

<!-- Offers -->
<div class="joc-tour joc-light-grey" style="display:none">
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
</div>
<!-- Offers -->

<!-- Offers alternative -->
<div id="joc-hotel">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center joc-heading animate-box">
                <h2>Our Offers</h2>
                <p>Enjoy our exclsive offers</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 animate-box">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="hotel-entry">
                            <a class="hotel-img" style="background-image: url(images/hotel-1.jpg);">
                                <p class="price"><span>$120</span><small> /night</small></p>
                            </a>
                            <div class="desc">
                                <h3><a href="#">Hotel Edison</a></h3>
                                <span class="place">New York, USA</span>
                                <p>A small river named Duden flows by their place and supplies it with the
                                    necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="hotel-entry">
                            <a class="hotel-img" style="background-image: url(images/hotel-2.jpg);">
                                <p class="price"><span>$120</span><small> /night</small></p>
                            </a>
                            <div class="desc">
                                <h3><a href="#">Hotel Edison</a></h3>
                                <span class="place">New York, USA</span>
                                <p>A small river named Duden flows by their place and supplies it with the
                                    necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="hotel-entry">
                            <a class="hotel-img" style="background-image: url(images/hotel-3.jpg);">
                                <p class="price"><span>$120</span><small> /night</small></p>
                            </a>
                            <div class="desc">
                                <h3><a href="#">Hotel Edison</a></h3>
                                <span class="place">New York, USA</span>
                                <p>A small river named Duden flows by their place and supplies it with the
                                    necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="hotel-entry">
                            <a class="hotel-img" style="background-image: url(images/hotel-4.jpg);">
                                <p class="price"><span>$120</span><small> /night</small></p>
                            </a>
                            <div class="desc">
                                <h3><a href="#">Hotel Edison</a></h3>
                                <span class="place">New York, USA</span>
                                <p>A small river named Duden flows by their place and supplies it with the
                                    necessary regelialia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offers alternative -->

@stop
