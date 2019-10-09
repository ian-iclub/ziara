@extends('admin.layouts.admin')

@section('css')

    {{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
    <style>
        .toggle {
            display: none;
        }
    </style>
@stop

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        {{--            <div class="row">--}}
        {{--                <div class="col-md-6 col-md-offset-3 text-center joc-heading animate-box">--}}
        {{--                    --}}{{--                        <h2>'Our Offers  </h2>--}}
        {{--                    --}}{{--                         <p>Enjoy our exclusive offers</p>--}}
        {{--                    <h2 style="font-size:30px;color: #E4A300;">{{ config('settings.offer_type') }}</h2>--}}
        {{--                    <small>{{ config('settin`gs.offer_message') }}</small>--}}

        {{--                </div>--}}
        {{--            </div>--}}
        {{-- Find below the added fields --}}

        <div class="row">
            <div class="col-md-2 col-lg-offset-10">
                <button type="submit" class="btn btn-primary btn-block toggler">Edit Offer Header</button>
            </div>
        </div>
        <div class="row add-header toggle">
            <div class="jumbotron col-md-12">
                <h3 class="">Offer Headers</h3>
                <hr class="my-4">
                <form class="form-horizontal" method="post" action="{{ route('offers_display.edit') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $settings['id'] }}">
                    <div class="form-group">
                        <label for="inputType" class="control-label col-sm-2">Primary Header</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputType" name="offer_type" required
                                   placeholder="E.g Easter offers" value="{{ $settings['offer_type'] ?? null }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage" class="control-label col-sm-2">Secondary Header</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputMessage" name="offer_message" required
                                   placeholder="E.g. Offers valid until end of May"
                                   value="{{ $settings['offer_message'] ?? null }}">
                        </div>
                    </div>
                    {{--                    <div class="row">--}}
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                    {{--                    </div>--}}
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 animate-box">

                <div class="owl-carousel">
                        @forelse($offers as $offer)
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
@stop

@section('js')
<script>
    $('.toggler').on('click', function (event) {
        if ($('.add-header').hasClass('toggle') == false) {
            $('.add-header').addClass('toggle');
            $(this).text('Edit Offer Header');
        } else {
            $('.add-header').removeClass('toggle');
            $(this).text('Close');
        }
    });
</script>
@stop
