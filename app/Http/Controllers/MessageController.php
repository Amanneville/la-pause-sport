<?php

namespace App\Http\Controllers;


use App\Model\Message;
use App\Model\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index()
    {


        $user = Auth::user();
        //dd($user);

//        $messages = Message::all()
//            ->sortByDesc('created_at')
//            ->where('session_id', '=', '2');

         $messages = DB::table('messages')
             ->where('session_id', '=', '2')
             ->leftJoin('users', 'users.id', '=', 'messages.from_id' )->get();

//             ->where('session_id', '=', '2');

        dd($messages->created_at);

        //dd($user->firstname);

        return view('message.index')->with('messages', $messages)
            ->with('user', $user);



    }



    public function store(Request $request)
    {
        $values = $request->all();

        $message = new Message();
        $message->from_id = $values['from_id'];
        $message->to = $values['to'];
        $message->is_read = $values['is_read'];
        $message->message = $values['message'];
        $message->session_id = $values['session_id'];
        $message->save();

        return back();
    }
}
