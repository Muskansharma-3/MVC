<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FirstMail;

class EmailController extends Controller
{
    //
    public function emaildata(Request $request){
        $to=$request->to;
        $sub=$request->subject;
        $msg=$request->message;
        Mail::to($to)->send(new FirstMail($sub, $msg));
    }
}
