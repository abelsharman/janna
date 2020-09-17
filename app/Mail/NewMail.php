<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $tel;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $tel)
    {
        //
        $this->name = $name;
        $this->tel = $tel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('tleksuerbasov@mail.ru')
                    ->markdown('emails.mail')
                    ->with($this->name, $this->tel);
    }
}