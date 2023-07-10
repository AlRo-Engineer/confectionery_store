<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $orderDetails;

    public function __construct($orderDetails)
    {
        $this->orderDetails = $orderDetails;
    }

    public function build()
    {
        return $this->view('emails.order-submitted', [
            'order' => $this->orderDetails,
        ])->subject('New Order Submitted');
    }

}
