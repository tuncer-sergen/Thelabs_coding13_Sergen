<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailInscription extends Mailable
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
        return $this->from('admin@admin.com')->view('Mailing.MailInscription');
    }
}
