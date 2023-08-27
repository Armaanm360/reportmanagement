<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MySendMail;

class MailController extends Controller
{
public function mail($to,$subject,$msg)
{
  $data = array('msg'=>$msg,'subject',$subject);
      Mail::send('mail.send_mail', $data, function($message) {
         $message->to($to, 'Leave Management')->subject
            ($subject);
         $message->from('xyz@gmail.com','Leave Management');
      });
      echo "HTML Email Sent. Check your inbox.";
}
}

