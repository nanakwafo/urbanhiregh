<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class ActivationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $code;
    private $email;

    public function __construct($code, $email)
    {
        //
        $this->code = $code;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $email = $this->email;
        $code = $this->code;
//        Mail::send('mails.activation', ['email' => $email, 'code' => $code], function ($message) {
//            $message->from('support@ifmacinema.com', 'urbanHire');
//
//            $message->to($this->email);
//        });


        return $this->subject('Urbanhire User Activation?')
            ->from('support@ifmacinema.com', 'User Activation ')
            ->view('mails.activation')
            ->with(['email' => $email, 'code' => $code])
            ;

    }
}
