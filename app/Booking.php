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
     /**
     * The customer's name
     *
     * @var String
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
     * @var String
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
     * @var String
     */
    private $destination;
    /**
     * The trip type if applicable i.e oneway = 1, return = 2
     *
     * @var integer
     */
    private $trip_type;
    /**
     * The budget available.
     *
     * @var String
     */
    private $budget;
    /**
     * The month of package acquisition.
     *
     * @var String
     */
    private $month;
    /**
     * The date of travel.
     *
     * @var String
     */
    public $date_of_travel;
    /**
     * The flight class.
     * 1 => First Class
     * 2 => Business Class
     *
     * @var integer
     */
    private $flight_class;
    /**
     * The number of people travelling.
     *
     * @var Integer
     */
    private $number_of_travellers;
    
}
