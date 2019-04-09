@if(Session::has('response'))
<script>$('.alert').alert()</script>
    <div class="alert alert-dismissable alert-success" style="margin-bottom: 0px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="z-index:9999">&times;</span>
        </button>
        <strong>
            {{ Session::get('response') }}
        </strong>
    </div>
@endif
<!-- Slider -->
<aside id="joc-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(../images/home11.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Fancy booking a flight?</h2>
                                <h1>Book with us</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(../images/home22.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Accomodation?</h2>
                                <h1>Book a Hotel</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(../images/home33.JPG);">
                <div class="overlay"></div>
                <div class="container-fluids">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Want more?</h2>
                                <h1>We offer packages</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
    <!-- Slider -->
