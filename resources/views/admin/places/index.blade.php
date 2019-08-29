@extends('admin.layouts.admin')

@section('content')
    {{-- {{ $places }} --}}
    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
    {{-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> --}}
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> --}}

    <div class="container">
        {{-- Button that toggles the form --}}
        <div class="row my-2">
            <div class="col-md-2 col-lg-offset-10"><button type="submit" class="btn btn-primary btn-block toggler">New Location</button></div>
        </div>
        {{-- Form --}}
        <div class="row add-place toggle">
            <div class="jumbotron">
                <h3 class="">New Location Details</h3>
                <hr class="my-4">
                <form action="">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="main-img-preview">
                                    <img class="thumbnail img-preview" src="{{ asset('images/placeholder.png') }}"
                                        title="Preview Logo">
                                </div>
                                <div class="input-group">
                                    <input id="fakeUploadLogo" class="form-control fake-shadow"
                                        placeholder="Choose File" disabled="disabled">
                                    <div class="input-group-btn">
                                        <div class="fileUpload btn btn-primary fake-shadow">
                                            <span><i class="glyphicon glyphicon-upload"></i> Upload Image</span>
                                            <input id="logo-id" name="logo" type="file" class="attachment_upload">
                                        </div>
                                    </div>
                                </div>
                                {{-- <p class="help-block" style="font-size:15px">* Upload the image to be displayed.</p> --}}
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="inputTitle">Title</label>
                                <input type="text" class="form-control" id="inputTitle"
                                    placeholder="Specific hotel/resort">
                            </div>
                            <div class="form-group">
                                <label for="inputLocation">Location</label>
                                <input type="text" class="form-control" id="inputLocation"
                                    placeholder="Location of hotel/resort">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- Table --}}
        <div class="row">
            <h2>Current Places</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Location</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($places as $place)
                    <tr>
                        <td>{{ $place['id'] }}</td>
                        <td>{{ $place['image_url'] }}</td>
                        <td>{{ $place['title'] }}</td>
                        <td>{{ $place['location'] }}</td>
                        <td><button type="submit" class="btn btn-warning">Update</button></td>
                        <td><button type="submit" class="btn btn-danger">Delete</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

<style>
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700,300);

        .toggle{
            display: none;
        }

        .form-control,
        .thumbnail {
            border-radius: 2px;
        }

        /* File Upload */
        .fake-shadow {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        .fileUpload {
            position: relative;
            overflow: hidden;
        }

        .fileUpload #logo-id {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 33px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .img-preview {
            max-width: 100%;
        }
</style>

<script>
    $(document).ready(function () {
        var brand = document.getElementById('logo-id');
        brand.className = 'attachment_upload';
        brand.onchange = function () {
            document.getElementById('fakeUploadLogo').value = this.value.substring(12);
        };

        // Source: http://stackoverflow.com/a/4459419/6396981
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.img-preview').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#logo-id").change(function () {
            readURL(this);
        });
    });


    $('.toggler').on('click', function (event) {
        if ($('.add-place').hasClass('toggle') == false) {
            $('.add-place').addClass('toggle');
            $(this).text('New Location');
        } else {
            $('.add-place').removeClass('toggle');
            $(this).text('Close');
        }
    });
</script>
@stop
