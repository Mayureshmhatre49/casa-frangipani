<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $isCustomer = false;

    /**
     * Create a new message instance.
     */
    public function __construct($booking, $isCustomer = false)
    {
        $this->booking = $booking;
        $this->isCustomer = $isCustomer;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $subject = $this->isCustomer ? 'Your Booking Request at Casa Frangipani' : 'New Booking Request — Casa Frangipani';

        return $this->subject($subject)
                    ->view('emails.booking-received')
                    ->with([
                        'booking' => $this->booking,
                        'isCustomer' => $this->isCustomer,
                    ]);
    }
}
