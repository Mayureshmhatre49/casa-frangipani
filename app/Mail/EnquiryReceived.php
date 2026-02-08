<?php

namespace App\Mail;

use App\Models\BotEnquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryReceived extends Mailable
{
    use Queueable, SerializesModels;

    public BotEnquiry $enquiry;

    public function __construct(BotEnquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function build()
    {
        return $this
            ->subject('New Villa Enquiry Received')
            ->view('emails.bot-enquiry-received');
    }
}
