@extends('page')

@section('top-content')
@include('partials.slider-replacement')
@stop

@section('content')
<!-- Booking area -->
<div id="joc-reservation">
    <!-- <div class="container"> -->
    <div class="row">
        <div class="search-wrap">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i>
                            Flight</a></li>
                    <li class=""><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i>
                            Hotel</a></li>
                    <li class=""><a data-toggle="tab" href="#package"><i class="flaticon-island"></i>
                            Package</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <!-- Flight booking tab -->
                <div id="flight" class="tab-pane fade in active">
                    <form method="post" class="joc-form">
                        <div class="row">
                            <!-- Full Name -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Full Name</label>
                                    <div class="form-field">
                                        <!-- <input type="text" id="location" class="form-control" placeholder="Location"> -->
                                        <i class="icon icon-profile-male"></i>
                                        <input type="text" id="name" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                            </div>
                            <!--  Full Name -->

                            <!-- Mobile Number -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Mobile Number</label>
                                    <div class="form-field">
                                        <!-- <input type="text" id="location" class="form-control" placeholder="Location"> -->
                                        <i class="icon icon-phone5"></i>
                                        <input type="number" id="number" class="form-control" placeholder="07xx">
                                    </div>
                                </div>
                            </div>
                                <!--  Mobile Number -->

                            <!--Email  -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Email</label>
                                    <div class="form-field">
                                        <!-- <input type="text" id="location" class="form-control" placeholder="Location"> -->
                                        <i class="icon icon-mail5"></i>
                                        <input type="number" id="number" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                                <br><br><br><br>
                                <!--  Email -->


                            <!-- Date of travel -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Date of travel</label>
                                    <div class="form-field">
                                        <!-- <input type="text" id="location" class="form-control" placeholder="Location"> -->
                                        <i class="icon icon-calendar2"></i>
                                        <input type="text" id="date_of_travel" class="form-control date" placeholder="Travel Date">
                                    </div>
                                </div>
                            </div>
                            <!-- Date of travel -->

                            <!-- Flight Class -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Flight Class</label>
                                    <div class="form-field">
                                        <!-- <i class="icon icon-calendar2"></i>
                                        <input type="text" id="date" class="form-control date" placeholder="Check-in date"> -->
                                        <i class="icon icon-plane"></i>
                                        <input type="text" id="class" class="form-control" placeholder="Class">
                                    </div>
                                </div>
                            </div>
                            <!-- Flight Class -->

                            <!-- Number of people travelling -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="guests">Travellers</label>
                                    <div class="form-field">
                                        <i class="icon icon-man"></i>
                                        <input type="text" id="travellers" class="form-control" placeholder="Number of peple travelling">
                                    </div>
                                </div>
                            </div>
                             <!-- Number of people travelling -->
                            <div class="col-md-2">
                                <input type="submit" name="submit" id="submit" value="Book Flight" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Flight booking tab -->


                <!-- Hotel Booking tab -->
                <!-- Contact us details will be placed here rather than a form as detailed in the TODO.TODO -->
                <div id="hotel" class="tab-pane fade">
                    <form method="post" class="joc-form" style="display:none">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="booknow">
                                    <h2>Book Now</h2>
                                    <span>Best Price Online</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Check-in:</label>
                                    <div class="form-field">
                                        <i class="icon icon-calendar2"></i>
                                        <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Check-out:</label>
                                    <div class="form-field">
                                        <i class="icon icon-calendar2"></i>
                                        <input type="text" id="date" class="form-control date" placeholder="Check-out date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="guests">Guest</label>
                                    <div class="form-field">
                                        <i class="icon icon-arrow-down3"></i>
                                        <select name="people" id="people" class="form-control">
                                            <option value="#">1</option>
                                            <option value="#">2</option>
                                            <option value="#">3</option>
                                            <option value="#">4</option>
                                            <option value="#">5+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <form method="post" class="joc-form">
                            <div class="col-md-10 col-md-offset-1 animate-box" style="color:white">
                                <h3 style="color:white">Contact us for Hotel Booking</h3>
                                <div class="row contact-info-wrap">
                                    <div class="col-md-3">
                                        <p><i class="icon-address-book"  style="padding-right: 0.4em;"></i> P.O. Box 55016-00200 Nairobi, Kenya</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p><i class="icon-phone2"  style="padding-right: 0.4em;"></i>(+254) 786 336 633</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p><i class="icon-mail5"  style="padding-right: 0.4em;"></i><a href="mailto:info@ziaratravels.co.ke" style="color:#E4A300">info@ziaratravels.co.ke</a><p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Hotel Booking tab -->


                <!-- Package booking tab -->
                <div id="package" class="tab-pane fade">
                    <form method="post" class="joc-form">
                        <div class="row">
                            <!-- Destination -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Destination</label>
                                    <div class="form-field">
                                        <i class="icon icon-location2"></i>
                                        <input type="text" id="destination" class="form-control" placeholder="Where to..">
                                    </div>
                                </div>
                            </div>
                            <!-- Destination -->

                            <!-- Trip Type -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="date">Trip Type</label>
                                    <div class="form-field">
                                        <!-- <i class="icon icon-calendar2"></i>
                                        <input type="text" id="date" class="form-control date" placeholder="Check-in date"> -->
                                        <i class="icon icon-plane"></i>
                                        <select name="people" id="trip" class="form-control">
                                            <option value="#" style="color:black" value="1-Way">One way</option>
                                            <option value="#" style="color:black"  value="Return">Return</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <!-- Trip Type -->

                             <!-- Budget -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="text">Budget</label>
                                    <div class="form-field">
                                        <i class="icon icon-dollar-sign"></i>
                                        <input type="text" id="budget" class="form-control" placeholder="Budget">
                                    </div>
                                </div>
                            </div>
                            <!-- Budget -->

                            <!-- Month Selection -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="date">Select Month</label>
                                    <div class="form-field">
                                        <!-- <i class="icon icon-calendar2"></i>
                                        <input type="text" id="date" class="form-control date" placeholder="Check-out date"> -->
                                        <i class="icon icon-calendar"></i>
                                        <select name="people" id="month" class="form-control">
                                            <option value="#" style="color:black" value="January">January</option>
                                            <option value="#" style="color:black" value="February">February</option>
                                            <option value="#" style="color:black" value="March">March</option>
                                            <option value="#" style="color:black" value="April">April</option>
                                            <option value="#" style="color:black" value="May">May</option>
                                            <option value="#" style="color:black" value="June">June</option>
                                            <option value="#" style="color:black" value="July">July</option>
                                            <option value="#" style="color:black" value="August">August</option>
                                            <option value="#" style="color:black" value="September">September</option>
                                            <option value="#" style="color:black" value="October">October</option>
                                            <option value="#" style="color:black" value="November">November</option>
                                            <option value="#" style="color:black" value="December">December</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Month Selection -->
                            <div class="col-md-2">
                                <input type="submit" name="submit" id="submit" value="Book Package" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </form>
                </div>
                 <!-- Package booking tab -->


                <div id="cruises" class="tab-pane fade" style="display:none">
                    <form method="post" class="joc-form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Where:</label>
                                    <div class="form-field">
                                        <input type="text" id="location" class="form-control" placeholder="Search Location">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Start Date:</label>
                                    <div class="form-field">
                                        <i class="icon icon-calendar2"></i>
                                        <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="guests">Categories</label>
                                    <div class="form-field">
                                        <i class="icon icon-arrow-down3"></i>
                                        <select name="category" id="category" class="form-control">
                                            <option value="#">Suite</option>
                                            <option value="#">Super Deluxe</option>
                                            <option value="#">Balcony</option>
                                            <option value="#">Economy</option>
                                            <option value="#">Luxury</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" name="submit" id="submit" value="Find Cruises" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking area -->
@stop
