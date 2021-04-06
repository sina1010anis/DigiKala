<?php

namespace App\Listeners;

use App\Events\ReplyComment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ReplyComment  $event
     * @return void
     */
    public function handle(ReplyComment $event)
    {
        Mail::to($event->email)->send(new \App\Mail\ReplyComment($event->text));
    }
}
