<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\DB;

class Notification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $id;
    public $for_user_id;
    public $notification_id;
    public $message;
    public $link;
    public $show_date;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($id, $for_user_id, $message, $link, $notification_id = '')
    {
        $now = strtotime(date("Y-m-d h:i:s"));
        $show_date = date('D, M Y h:i:sa', $now);
        $ins_id = DB::table('notification')->insertGetId(['user_id' => $id, 'for_user_id' => $for_user_id, 'message' => $message, 'link' => $link, 'status' => 0, 'show_date' => $show_date]);

        $this->id = $id;
        $this->notification_id = $ins_id;
        $this->for_user_id = $for_user_id;
        $this->message = $message;
        $this->link = $link;
        $this->show_date = $show_date;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ['notification-channel-report-management' . $this->for_user_id];
        //        return ['status-liked'];
    }
}
