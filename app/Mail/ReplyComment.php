<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyComment extends Mailable
{
    use Queueable, SerializesModels;

    private $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($text)
    {
        //
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sina1010anis@gmail.com')
            ->subject('با تشکر از نظر شما پس از تایید مدیر قابل مشاهده است')
            ->view('front.mail.ReplyComment' )
            ->with('textComment' , $this->text);
    }
}
