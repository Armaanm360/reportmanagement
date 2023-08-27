<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class Messenger implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $id;
    public $user_id;
    public $to_user_id;
    public $message_id;
    public $message;
    public $status;
    public $show_date;
    public $image;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($id,$user_id,$to_user_id,$message_id,$message,$status,$show_date,$image)
    {
//        $now= strtotime(date("Y-m-d h:i:s"));
        $show_date = $show_date;
//        $ins_id = DB::table('chats')->insertGetId(['user_id'=>$user_id,'to_user_id'=>$to_user_id,'message'=>$message,'status'=>$status,'date'=>$show_date]);
//        print_r($ins_id);die;
        $this->id = $id;
        $this->user_id = $user_id;
        $this->message_id = $message_id;
        $this->to_user_id = $to_user_id;
        $this->message = $message;
        $this->status = $status;
        $this->show_date = $show_date;
        $this->image = $image;
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
       return ['messenger-channel'];
    }
}
