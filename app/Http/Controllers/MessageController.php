<?php

namespace App\Http\Controllers;

use App\Model\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index()
    {

        //$messages = DB::table('messages');
        //$messages = Message::all()->where('session_id','=','2');
        $messages = Message::all()->sortDesc();
        return view('message.index')->with('messages', $messages);
    }

    public function store(Request $request)
    {
        $values = $request->all();

        $message = new Message();

        $message->message = $values['message'];

        $message->save();
}

}

