@extends('admin.admin-page')


{{-- <div class="container" class="admin-home">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div id="joc-hotel" class="admin-home"> --}}
        @section('content')
        <div class="container">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center joc-heading animate-box">
                    <h2>Our Offers  </h2>
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
                                    <a class="hotel-img" style="background-image: url({{ $offer['image'] }});">
                                        <p class="price"><span>{{ $offer['period'] }}</span><small></small></p>
                                    </a>
                                    <div class="desc">
                                        <h3><a href="#">{{ $offer['title'] }}</a></h3>
                                        <span class="place">{{ $offer['location'] }}</span>
                                        {{-- <p>{{ $offer['desc'] }}</p> --}}
                                        <p>
                                                @foreach($offer['desc'] as $type)
                                                <h4 class="desc-price">{{$type['currency'] . ' ' . number_format($type['price'], 0)}}</h4>
                                                <p class="desc-content">{{$type['content']}}</p>
                                                @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <p>No offers</p>
                            @endforelse
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
@endsection

<style>
.admin-home
{
    /* height: 100vh; */
}

</style>

