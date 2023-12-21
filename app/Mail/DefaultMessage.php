<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class DefaultMessage extends Mailable
{
    public $data;

    public function __construct($customData)
    {
        $this->data = $customData;
    }

    public function build()
    {
        return $this->subject('Thank You!')
            ->view('email.message');
    }
}
