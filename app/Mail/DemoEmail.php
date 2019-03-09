<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Booking;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * The demo object instance.
     *
     * @var Booking
     */
    public $booking;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('emails.demo')->from("info@ziara.com");

        return $this->to("josenabz@gmail.com")
                    ->from($this->booking->email)
                    ->subject('Book a ' . $this->booking->booking_type)
                    ->markdown('emails.demo')
                    ->text('emails.demo_plain')
                    ->with(
                      [
                            'booking_type' => $this->booking->booking_type,
                            'booking' => json_encode($this->booking),
                      ]);
    }
}
