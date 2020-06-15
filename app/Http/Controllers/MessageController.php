<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $user = Auth::user();
        //dd($user);

//        $messages = Message::all()
//            ->sortByDesc('created_at')
//            ->where('session_id', '=', '2');

        $messages = DB::table('messages')
            ->leftJoin('users', 'users.id', '=', 'messages.from_id' )
            ->where('users.id', '=', $user->id)
            ->get();

//             ->where('session_id', '=', '2');

      //  dd($messages->sortDesc());

        //dd($user->firstname);

        return view('message.index')->with('messages', $messages);
    }
/*
    public function getChat(Request $request){


        $conversation = Message::all()
            ->sortByDesc('created_at')
            ->where('session_id', '=', '4');

        return $conversation;
    }
*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
