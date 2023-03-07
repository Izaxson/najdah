<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function massage(Request $request)
    {
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->massage = $request->massage;
        $message->save();
    
        return back()->with('success', 'Your message has been sent. Thank you!');
    }
    
}