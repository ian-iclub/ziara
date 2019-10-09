@extends('admin.layouts.admin')

@section('content')
{{-- {{ $users }} --}}
{{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
{{-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> --}}
{{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
{{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> --}}


<div class="container">
    {{-- Button that toggles the form --}}
    <div class="row my-2">
        @if ($errors->any())
        <style>
            .toggle {
                display: block !important;
            }

        </style>
        @endif
        @isset($user)
        <div class="col-md-4 col-lg-offset-7">
            <h4>You are currently editing </h4>
            <h3><b> {{ 'Details for: ' . $user->name }} </b></h3>
        </div>
        <div class="col-md-1">
            <a href="{{ route('users.index') }}" class="btn btn-danger"> Cancel </a>
        </div>
        @else
        <div class="col-md-2 col-lg-offset-10">
            <button type="submit" class="btn btn-primary btn-block toggler">Add a new user</button>
        </div>
        @endisset
    </div>
    {{-- Form --}}

    <div class="row add-place {{ isset($display_form) ? '' : 'toggle' }}">
        <div class="col-md-12">
            <div class="jumbotron">
                <h3 class="">New User</h3>
                <hr class="my-4">
                @isset($user)
                <form action="{{ route('users.update', ['id' => $user->id]) }}" method="post"
                    enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put" />
                    @else
                    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                        @endisset
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputTitle">Name</label>
                                    <input type="text" class="form-control" id="inputTitle" name="name" required
                                        placeholder="Username" value="{{ $user->name ?? null }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="email" required
                                           placeholder="Email Address" value="{{ $user->email ?? null }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputPassword">Password</label>
                                    <input type="password" class="form-control" id="inputPassword" name="password"
                                           required
                                           placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputLocation">Confirm Password</label>
                                    <input type="password" class="form-control" id="password-confirm"
                                           name="password_confirmation" required placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                @if ($errors->any())
                                    <style>
                                        .toggle {
                                            display: block;
                                        }

                                    </style>
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>


    {{-- Table --}}
    <div class="row">
        <h2>Current Users</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Email Verified</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['email_verified_at'] }}</td>
                    <td>
                        <a href="{{ route('users.edit', ['id' => $user->id]) }}"
                            class="btn btn-warning float-left">Update</a>
                        <form class="deleteForm" action="{{ route('users.destroy', ['id' => $user->id]) }}"
                              method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete" />
                            <button type="submit" class="btn btn-danger float-left">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700,300);

    .toggle {
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
        // var brand = document.getElementById('logo-id');
        // brand.className = 'attachment_upload';
        // brand.onchange = function () {
        //     document.getElementById('fakeUploadLogo').value = this.value.substring(12);
        // };
        //
        // function readURL(input) {
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
        //
        //         reader.onload = function (e) {
        //             $('.img-preview').attr('src', e.target.result);
        //         };
        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }
        // $("#logo-id").change(function () {
        //     readURL(this);
        // });

    $('.toggler').on('click', function (event) {
        if ($('.add-place').hasClass('toggle') == false) {
            $('.add-place').addClass('toggle');
            $(this).text('Add a new user');
        } else {
            $('.add-place').removeClass('toggle');
            $(this).text('Close');
        }
    });

        $('.deleteForm').submit(function () {
            var c = confirm("Delete this User?");
            return c; //you can just return c because it will be true or false
        });
    });
</script>
@stop
