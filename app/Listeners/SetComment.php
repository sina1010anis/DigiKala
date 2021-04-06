<?php

namespace App\Listeners;

use App\Events\ReplyComment;
use App\Models\reply_comment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SetComment
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
        $reply = new reply_comment();
        $reply->text = $event->text;
        $reply->user_id = auth()->user()->id;
        $reply->comment_id = $event->id;
        $reply->save();
    }
}
