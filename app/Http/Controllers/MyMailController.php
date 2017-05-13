<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MyMailController extends Controller
{
    public function sendmail(Request $request){
    	Mail::send('emails.send',[], function ($message)
		{
		    $message->from('nhandangkytuvan@gmail.com', 'PK Nam Khang');
		    $message->to('nhandangkytuvan@gmail.com');
		    $message->subject('Người dùng đăng ký khám');
		});
    }
}
