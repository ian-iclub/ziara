@extends('admin.layouts.admin')

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-2 col-lg-offset-10">
                <button type="submit" class="btn btn-primary btn-block toggler">Edit Offer Header</button>
            </div>
        </div>
        <div class="row add-header toggle">
            <div class="jumbotron col-md-12">
                <h3 class="">Offer Headers</h3>
                <hr class="my-4">
                <form action="">
                    <div class="form-group">
                        <label for="inputTitle">Primary Header</label>
                        <input type="text" class="form-control" id="inputTitle" name="title" required
                            placeholder="E.g Easter offers" value="{{ $place->title ?? null }}">
                    </div>
                    <div class="form-group">
                        <label for="inputTitle">Secondary Header</label>
                        <input type="text" class="form-control" id="inputTitle" name="title" required
                            placeholder="E.g. Offers valid until end of May" value="{{ $place->title ?? null }}">
                    </div>
                </form>
            </div>
        </div>

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
<style>
     .toggle {
         display: none;
     }
</style>
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

