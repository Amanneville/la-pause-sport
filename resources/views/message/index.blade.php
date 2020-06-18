@extends('message.chatBox')

{{--    <!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}

{{--    --}}{{--  BOOTSTRAP  --}}
{{--    <link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
{{--    <meta http-equiv="Refresh" content="20">--}}
{{--    @yield('scripts-header')--}}
{{--</head>--}}
{{--<body>--}}
<style>
    #chatbox {
        text-align:left;
        margin:0 auto;
        margin-bottom:25px;
        padding:10px;
        background:#fff;
        height:270px;
        width:500px;
        border:1px solid #ACD8F0;
        overflow:auto; }
</style>


{{--@section('content')--}}





        <div id="chatBox">
            @foreach($messages as $message)
                <ul>
                    <li>{{ $message->from .' à écrit :'. $message->message }}</li>
{{--                    <li>{{  $message->created_at }}</li>--}}
                                $user->firstname
                </ul>
            @endforeach
        </div>



    <form action="" method="post" id="formMessage">
        @csrf

        <label for="from">Nom</label>
        <input type="text" name="from" placeholder="from">

        <label for="to">Destinataire</label>
        <input type="text" name="to" placeholder="to">

        <label for="is_read">Lu/Non lu</label>
        <input type="number" name="is_read" placeholder="is_read">
        <div>
            <label for="session_id">N° Session</label>
            <input type="number" name="session_id" placeholder="session_id">
        </div>

<div>
    <label for="message">Message</label>
    <textarea name="message" cols="50" rows="2">Votre message...</textarea>
</div>


        <button>Envoyer</button>
    </form>
{{--<p>Envoyer un message, en tant que {{$user->firstname}}</p>--}}
@section('content')
        @endsection
{{--    <br>--}}
{{--    <h3>Table des messages de la Session N°2 - ordre récents->anciens</h3>--}}
{{--    <table>--}}
{{--        <thead>--}}
{{--        <tr class="table table-dark">--}}
{{--            <td>Session_id</td>--}}
{{--            <td>#</td>--}}
{{--            <td>from</td>--}}
{{--            <td>to</td>--}}
{{--            <td>message</td>--}}
{{--            <td>read</td>--}}
{{--            <td>date msg</td>--}}

{{--        </tr>--}}
{{--        </thead>--}}
{{--        @foreach($messages as $message)--}}
{{--            <tr>--}}
{{--                <td>{{ $message->session_id }}</td>--}}
{{--                <td>{{ $message->id }}</td>--}}
{{--                <td>{{ $message->from }}</td>--}}
{{--                <td>{{ $message->to }}</td>--}}
{{--                <td>{{ $message->message }}</td>--}}
{{--                <td>{{ $message->is_read }}</td>--}}
{{--                <td>{{ $message->created_at }}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}


{{--    --}}{{-- AJAX--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--    <script type="text/javascript"></script>--}}
{{--temps interval refresh de la page (sur serveur 1500)--}}
{{--<script>--}}

{{--        // setInterval('load_messages()', 20000)--}}
{{--        // function load_messages() {--}}
{{--        //    // $('#bodyChat').load('chatBox.php #chatBox')--}}
{{--        //     $('#chatBox').load('message.chatBox.php')--}}
{{--        //     //     , function() {--}}
{{--        //     //     alert( "Load was performed." );--}}
{{--        //     // });--}}
{{--        // }--}}


{{--</script>--}}

{{--@endsection--}}




