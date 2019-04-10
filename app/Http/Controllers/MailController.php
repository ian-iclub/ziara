<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\DemoEmail;
use App\Mail\ContactMail;
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
        $booking->email = $request->email;
        // $booking->date_of_travel = $request->date;
        $booking->date_of_travel = date('d M Y', strtotime($request->date));
        $booking->flight_class = $request->class;
        $booking->number_of_travellers = $request->travellers;
        $booking->destination = $request->destination;

        // $booking->trip_type = Booking::RETURN;
        // $booking->destination = 'Mali';
        // $booking->date_of_travel = '2019-04-16';

        // $booking->email = 'jmnabangi@gmail.com';

        Mail::send(new DemoEmail($booking));


        if (!Mail::failures()) {
            $success = "Successfully booked!";
            return redirect()->route('book')->with("success",$success);
        }

        $error = "Could not send email, please try again...";

        return redirect()->route('book')->with("error",$error);

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
        $booking->customer_name = $request->name;
        $booking->mobile_number = $request->number;
        $booking->email = $request->email;
        $booking->trip_type = $request->class;
        $booking->destination = $request->destination;
        $booking->currency = $request->currency;

        if ($booking->currency == 1) {
            $booking->currency = Booking::SHILLING;
        } else if ($booking->currency == 2) {
            $booking->currency = Booking::DOLLAR;
        }

        $booking->budget = $request->budget;
        $booking->month = $request->month;
        // $booking->number_of_travellers = 2;
        // $booking->email = 'jack@dabbers.com';

        // return json_decode(json_encode($booking), true);

        Mail::send(new DemoEmail($booking));

        if (!Mail::failures()) {
            $success = "Successfully booked!";
            return redirect()->route('book')->with("success",$success);
        }

        $error = "Could not send email, please try again...";

        return redirect()->route('book')->with("error",$error);

    }

    public function contactUs(Request $request)
    {
        $booking = new Booking();
        $booking->customer_name = $request->lname . ' ' . $request->fname;
        $booking->email = $request->email;
        $booking->subject = "Contact us: " . $request->subject;
        $booking->message = $request->message;

        Mail::send(new ContactMail($booking));

        $success = "Successfully booked!";

        if (!Mail::failures()) {
            $success = "Details successfully sent!";
            return redirect()->route('contact')->with("success",$success);
        }

        $error = "Could not send details. Kindly try again....";

        return redirect()->route('contact')->with("error",$error);
    }

}
