<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactusMail extends Mailable
{
    use Queueable, SerializesModels;

    private $senderEmail;
    private $senderName;
    private $contactmessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($senderEmail,$senderName,$contactmessage)
    {
        //
        $this->senderEmail = $senderEmail;
        $this->senderName = $senderName;
        $this->contactmessage = $contactmessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {




        return $this->subject('Urbanhire Contact Us?')
            ->from('support@ifmacinema.com', 'Contact Us ')
            ->view('mails.contact-message')
            ->with(['senderName' => $this->senderName,
                'senderEmail' =>$this->senderEmail,
                'senderMessage' =>$this->contactmessage,
            ])
            ;
    }
}
