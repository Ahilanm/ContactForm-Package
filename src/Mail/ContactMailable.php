<?php

namespace Package\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $email;
    public $name;
    public $phone;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $email, $name, $phone)
    {
        //
        $this->message = $message;
        $this->email = $email;
        $this->name = $email;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with(['message'=>$this->message, 'name'=>$this->name, 'email'=>$this->email, 'phone'=>$this->phone ]);
    }
}
