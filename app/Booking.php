<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Booking types
    const FLIGHT = 'Flight';
    const HOTEL = 'Hotel';
    const PACKAGE = 'Package';

    // Trip types
    const ONE_WAY = 'One Way';
    const RETURN = 'Return';

    // Flight classes
    const FIRST_CLASS = 'First Class';
    const BUSINESS_CLASS = 'Business Class';
    const ECONOMY_CLASS = 'Economy Class';

    // Currencies
    const SHILLING = 'Ksh';
    const DOLLAR = '$';

    /**
     * The customer's name
     *
     * @var string
     */
    private $customer_name;
    /**
     * The customer's phone number
     *
     * @var int
     */
    private $mobile_number;
    /**
     * The customer's email
     *
     * @var string
     */
    private $email;
    /**
     * The booking type i.e flight, hotel, package
     *
     * @var int
     */
    private $booking_type;
    /**
     * The destination if applicable.
     *
     * @var string
     */
    private $destination;
    /**
     * The trip type if applicable i.e oneway = 1, return = 2
     *
     * @var int
     */
    private $trip_type;
    /**
     * The budget available.
     *
     * @var string
     */
    private $currency;
    /**
     * The budget available.
     *
     * @var int
     */
    private $budget;
    /**
     * The month of package acquisition.
     *
     * @var string
     */
    private $month;
    /**
     * The date of travel.
     *
     * @var string
     */
    public $date_of_travel;
    /**
     * The flight class.
     * 1 => First Class
     * 2 => Business Class
     *
     * @var int
     */
    private $flight_class;
    /**
     * The number of people travelling.
     *
     * @var int
     */
    private $number_of_travellers;
    /**
     * The subject of message.
     *
     * @var string
     */
    private $subject;
    /**
     * The message.
     *
     * @var string
     */
    private $message;

}
