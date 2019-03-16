<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\DemoEmail;
use App\Booking;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function bookFlight(Request $request)
    {
        $booking = new Booking();
        $booking->booking_type = Booking::FLIGHT;
        $booking->customer_name = $request->name;
        $booking->mobile_number = $request->number;
        $booking->date_of_travel = $request->date_of_travel;
        $booking->flight_class = $request->class;
        $booking->number_of_travellers = $request->travellers;

        return $booking;

        // $booking->trip_type = Booking::RETURN;
        // $booking->destination = 'Mali';
        $booking->date_of_travel = '2019-04-16';
        
        $booking->email = 'jmnabangi@gmail.com';

        Mail::queue(new DemoEmail($booking));

        return (new \App\Mail\DemoEmail($booking));
    }

    public function bookHotel()
    {
        $booking = new Booking();
        // $booking->trip_type = Booking::RETURN;
        // $booking->destination = 'Mali';
        $booking->date_of_travel = '2019-04-16';
        $booking->flight_class = Booking::FIRST_CLASS;
        $booking->number_of_travellers = 2;
        $booking->email = 'jack@dabbers.com';

        // return json_decode(json_encode($booking), true);

        Mail::queue(new DemoEmail($booking));

        return (new \App\Mail\DemoEmail($booking));
    }

    public function bookPackage(Request $request)
    {
        $booking = new Booking();
        $booking->booking_type = Booking::PACKAGE;
        $booking->trip_type = Booking::RETURN;
        $booking->destination = 'Mali';
        $booking->budget = '72300';
        $booking->month = 'January';
        // $booking->number_of_travellers = 2;
        $booking->email = 'jack@dabbers.com';

        // return json_decode(json_encode($booking), true);

        Mail::to("info@ziara.com")->send(new DemoEmail($booking));

        return (new \App\Mail\DemoEmail($booking));
    }
}
