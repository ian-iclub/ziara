@extends('admin.layouts.admin')

@section('content')
{{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
{{--<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">--}}

<div class="container">

    <div class="row my-2">
        @isset($offer)
            <div class="col-md-4 col-lg-offset-7">
                <h4>You are currently editing </h4>
                <h3><b> {{ 'Offer for: ' . $offer['place']->title . ' ' . $offer['period'] }} </b></h3>
            </div>
            <div class="col-md-1">
                <a href="{{ route('offers.index') }}" class="btn btn-danger"> Cancel </a>
            </div>
        @else
            <div class="col-md-2 col-lg-offset-10">
                <button type="submit" class="btn btn-primary btn-block toggler">New Offer</button>
            </div>
        @endisset
    </div>
   {{-- form --}}
    <div class="row add-place {{ isset($display_form) ? '' : 'toggle' }}">
        <div class="col-md-12">
            <div class="jumbotron">
                <h3 class="">Adding a new offer</h3>
                <hr class="my-4">
                <div>
                    @isset($offer)
                        <form action="{{ route('offers.update', ['id' => $offer->id]) }}" method="post">
                            <input type="hidden" name="_method" value="put"/>
                            @else
                                <form action="{{ route('offers.store') }}" method="post">
                                    @endisset
                                    @csrf
                        <div class="form-group">
                            <label for="inputLocation">Location</label>
                            <select class="form-control" id="inputLocation" name="place_id" required>
                                @foreach($places as $place)
                                    <option value="{{ $place->id }}"
                                        {{ isset($offer) && $place->id == $offer->place_id ? 'selected' : ''}}>
                                        {{ $place->title }}
                                        - {{ $place->location }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputPeriod">Period</label>
                            <input type="text" class="form-control" id="inputPeriod" name="period" required
                                   placeholder="E.g. August, November ..." value="{{ $offer->period ?? null }}">
                        </div>
                        <div class="form-group">
                            <label for="inputDetails">Details</label>
                            <input type="text" class="form-control" id="inputDetails" name="details" required
                                   placeholder="Details concerning the offer" value="{{ $offer->details ?? null }}">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputPrice">Price</label>
                                    <input type="number" class="form-control" id="inputPrice" name="price" required
                                           placeholder='00' min="1" value="{{ $offer->price ?? null }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputCurrency">Currency</label>
                                    <select class="form-control" id="inputCurrency" name="currency" required>
                                        <option
                                            value="KES" {{ isset($offer) && 'KES' == $offer->currency ? 'selected' : ''}}>
                                            KES
                                        </option>
                                        <option
                                            value="USD" {{ isset($offer) && 'USD' == $offer->currency ? 'selected' : ''}}>
                                            USD
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Save as active?</label><br>
                                <div class="form-check form-check-inline">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="active" id="inputYes"
                                               value="1" {{ isset($offer) && '1' == $offer->active ? 'checked' : ''}}>
                                        <label class="form-check-label" for="inputYes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="active" id="inputNo"
                                               value="0" {{ isset($offer) && '0' == $offer->active ? 'checked' : !isset($offer) ? 'checked' : ''}}>
                                        <label class="form-check-label" for="inputNo">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Table --}}
    {{-- Uncomment the table below to and use its code --}}

    <div class="row">
        <h2>Current Offers {{ isset($offer_place) ? 'of '.$offer_place[0]['title'] : '' }}</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Location</th>
                    <th scope="col">Period</th>
                    <th scope="col">Details</th>
                    <th scope="col">Price</th>
                    <th scope="col">Currency</th>
                    <th scope="col">Active</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @forelse($offers as $offer)
                <tr>
                    <td>{{ $offer['place']->title }}</td>
                    <td>{{ $offer['period'] }}</td>
                    <td>{{ $offer['details'] }}</td>
                    <td>{{ $offer['price'] }}</td>
                    <td>{{ $offer['currency'] }}</td>
                    <td>
                        <form action="{{ route('offers.activate', ['id' => $offer->id]) }}" method="post">
                            @csrf
                            <button type="submit" title="Click to activate or deactivate."
                                    class="btn {{ $offer['active'] == 1 ? 'btn-success' : 'btn-dark'}}">
                                {{ $offer['active'] == 1 ? 'Active' : 'Inactive'}}
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('offers.edit', ['id' => $offer->id]) }}"
                           class="btn btn-warning">Update</a>
                    </td>
                    <td>
                        <form action="{{ route('offers.destroy', ['id' => $offer->id]) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete"/>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <p>No offers available at the moment.</p>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

<style>
    .toggle
    {
        display: none;
    }
</style>

<script>
    $('.toggler').on('click', function (event) {
        if ($('.add-place').hasClass('toggle') == false) {
            $('.add-place').addClass('toggle');
            $(this).text('New Offer');
        } else {
            $('.add-place').removeClass('toggle');
            $(this).text('Close');
        }
    });
</script>
@stop
