@extends('layouts.app')
@section('content')

{{--    {{dd($session)}}--}}

    Personne qui a créé la session :
    // session->coach ?
{{--    {{ dd($session->coach) }}--}}
     utilisateur dans la session :
    // session->users (attention sans le coach)
{{--    {{dd($session->users)}}--}}
    Afficher le sport de la session
    // session->sport

    Messages
    //session->messages


    @foreach($session->messages as $message)
        <p><b>{{ $message->from->firstname }} a écrit :</b><br> {{ $message->message }}</p>
    @endforeach



@endsection
