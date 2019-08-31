@extends('admin.layouts.admin')

@section('content')
{{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

<div class="container">

    <div class="row my-2">
        <div class="col-md-2 col-lg-offset-10"><button type="submit" class="btn btn-primary btn-block toggler">New Offer</button></div>
    </div>
   {{-- form --}}
    <div class="row add-place toggle">
        <div class="col-md-12">
            <div class="jumbotron">
                <h3 class="">Adding a new offer</h3>
                <hr class="my-4">
                <div>
                    <form action="">
                        <div class="form-group">
                            <label for="inputLocation">Location</label>
                            <select class="form-control" id="inputLocation" name="location" required>
                                @foreach($places as $place)
                                    <option value="{{ $place->id }}">{{ $place->title }}
                                        - {{ $place->location }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputPeriod">Period</label>
                            <input type="text" class="form-control" id="inputPeriod" name="period" required
                                   placeholder="E.g. Aug/Nov, Aug-Nov...">
                        </div>
                        <div class="form-group">
                            <label for="inputDetails">Details</label>
                            <input type="text" class="form-control" id="inputDetails" name="details" required
                                   placeholder="Details concerning the offer">
                        </div>
                        <div class="row">
                            <div class="col-md-4" style="padding-top:20px">
                                <div class="form-group">
                                    <label for="inputPrice">Price</label>
                                    <input type="number" class="form-control" id="inputPrice" name="price" required
                                           placeholder='00' min="1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputCurrency">Currency</label>
                                    <select class="form-control" id="inputCurrency" name="currency" required>
                                        <option value="KES">KES</option>
                                        <option value="USD">USD</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Save as active?</label><br>
                                <div class="form-check form-check-inline">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="active" id="inputYes"
                                               value="Yes">
                                        <label class="form-check-label" for="inputYes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="active" id="inputNo"
                                               value="No">
                                        <label class="form-check-label" for="inputNo">No</label>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Table --}}
    {{-- Uncomment the table below to and use its code --}}

    {{-- <div class="row">
        <h2>Current Offers</h2>
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
                @foreach($offers as $offer)
                <tr>
                    <td>{{ $offer['location'] }}</td>
                    <td>{{ $offer['period'] }}</td>
                    <td>{{ $offer['details'] }}</td>
                    <td>{{ $offer['price'] }}</td>
                    <td>{{ $offer['currency'] }}</td>
                    <td>{{ $offer['active'] }}</td>
                    <td><button type="submit" class="btn btn-warning">Update</button></td>
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
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
