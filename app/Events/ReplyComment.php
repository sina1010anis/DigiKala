<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ReplyComment
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $id;
    public $text;
    public $email;

    /**
     * Create a new event instance.
     *
     * @param $id
     * @param $text
     * @param $email
     */
    public function __construct($id,$text,$email)
    {
        //
        $this->id = $id;
        $this->text = $text;
        $this->email = $email;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
