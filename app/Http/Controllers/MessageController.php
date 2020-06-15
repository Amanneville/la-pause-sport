<?php

namespace App\Http\Controllers;


use App\Model\Message;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index()
    {
         $messages = Message::all()
             ->sortByDesc('created_at')
             ->where('session_id', '=', '2');

//        $message = DB::table('messages');
        return view('Message.index')->with('messages', $messages);

    }

    public function store(Request $request)
    {
        $values = $request->all();

        $message = new Message();
        $message->from = $values['from'];
        $message->to = $values['to'];
        $message->is_read = $values['is_read'];
        $message->message = $values['message'];
        $message->session_id = $values['session_id'];
        $message->save();

    }
}
