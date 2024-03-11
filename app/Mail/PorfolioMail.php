<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PorfolioMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $name;
    public $email;
    public $mobile;
    public $message;

    public function __construct($info)
    {
        $this->name = $info['name'];
        $this->email = $info['email'];
        $this->mobile = $info['mobile'];
        $this->message = $info['message'];
    }

    public function build()
    {
        return $this->view('emails.mail');
    }
}
