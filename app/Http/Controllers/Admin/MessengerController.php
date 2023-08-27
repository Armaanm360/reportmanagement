<?php

namespace App\Http\Controllers\Admin;
use App\Models\chats;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class MessengerController extends Controller
{
    public function index(Request $request) {  
        $id = Auth::user()->id; 
        
        $data['new_messages_users'] = DB::table('chats')
                ->select('users.id','users.name','chats.to_user_id','chats.created_at','chats.status','chats.date','users.image','chats.message')
                ->where('chats.status',0)
                ->where('chats.user_id','=',$id)
                ->orWhere('chats.to_user_id','=',$id)
                ->join('users','users.id','=','chats.to_user_id')
                ->orderBy('chats.created_at','desc')
//                ->groupBy('to_user_id')
                ->get();
//       echo'<pre>'; print_r($data['new_messages_users'] );die;

//        event( new \App\Events\Messenger($id,$user_id,$to_user_id,$message_id,$message,$status,$show_date));
        $data['to_user_id'] = $request->to_user_id;
        $data['all_user'] = User::all();
         foreach ($data['all_user'] as $rowpl) {
            $datapl[] = $rowpl->to_user_id;
        }

        if (count($datapl) != 0) {
            $data['users'] = $datapl;
        } else {
            $data['users'] = "";
        }
        return view('messenger.new_messenger',$data);
    }
    public function user_list() {
        $data['all_user'] = User::all();
        return view('messenger.user_list',$data);
    }
    public function get_messages(Request $request) {
        $id = Auth::user()->id; 
        DB::select("UPDATE chats SET status = 1 WHERE  to_user_id = '$id' AND user_id = '$request->to_user_id' ");
     	$data['all_messages'] = DB::select("SELECT * FROM chats WHERE user_id = '$id' AND to_user_id = '$request->to_user_id' OR to_user_id = '$id' AND user_id = '$request->to_user_id' ");
//     
        $outputHtml = '';
        foreach ($data['all_messages'] as $row){
            if($row->user_id == Auth::user()->id){
                         $outputHtml .= '
                <div class="message-list me">
        <div class="msg">
          <p>
          '.$row->message.'
        </p>
        </div>
        <div class="time"> '.$row->date.'</div>
      </div>
';   
            }else  if($row->to_user_id == Auth::user()->id){
             $outputHtml .= '
             <div class="message-list ">
        <div class="msg">
          <p>
          '.$row->message.'
        </p>
        </div>
        <div class="time"> '.$row->date.'</div>
      </div>    
';   
            }

        }
        return $outputHtml;
    }
    public function send_message(Request $request) {
//       $now= strtotime(date("Y-m-d h:i:s"));
       $show_date = $request->date;
       $send = new chats;
       $send['user_id'] = auth()->user()->id;
       $send['to_user_id'] = $request->to_user_id;
       $send['message'] = $request->message;
       $send['date'] = $request->date;
       $send['time'] = date("h:i:sa");
       $send['status'] = 0;
       $send->save();
 
    $userInfo = user::find(Auth::user()->id);
    $status = 0;
    $id = \Illuminate\Support\Facades\Auth::user()->id;
    $user_id = \Illuminate\Support\Facades\Auth::user()->id;
    $to_user_id = $request->to_user_id;
    $message_id = $send->id;
    $image = url('/').'/public/user_images/'.$userInfo->image;
    if($request->message){
     $message = $request->message;     
    }else{
      $message = '';  
    }      
//    $show_date = date('Y-m-d');
        event( new \App\Events\Messenger($id,$user_id,$to_user_id,$message_id,$message,$status,$show_date,$image));
    }
}
