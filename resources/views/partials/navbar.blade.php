<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2">
                    <div id="colorlib-logo"><a href="/"><img src="{{ asset('images/logo.png') }}" height="110px" ></a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li class="has-dropdown">
                            <a href="#">Book a Safari</a>
                            <ul class="dropdown">
                                <li><a href="{{route('flight')}}">Flight</a></li>
                                <li><a href="{{route('hotel')}}">Hotel</a></li>
                                <li><a href="{{route('package')}}">Package</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>