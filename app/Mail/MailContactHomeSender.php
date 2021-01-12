<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailContactHomeSender extends Mailable
{
    use Queueable, SerializesModels;
    public $mail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($MailText)
    {
        $this->mail = $MailText;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->mail->email)->view('Mailing.MailingHome');
    }
}
