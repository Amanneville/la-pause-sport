{{-- PAGE : mes-sessions{id} --}}
{{-- Informations de la session du user connecté --}}

@extends('layouts.app')
@section('content')
{{--    {{dd($session)}}--}}

{{--Afficher le sport de la session : session->sport--}}
<p>Session : {{ $session->sports->name }}</p>
{{--{{ dd($session->sports->name)}}--}}

<p>Session du {{ $session->date }}</p>
<p>infos de la table sessions/session...</p>

{{--Personne qui a créé la session : session->coach ?--}}
<p> Le(la) coach de cette session est : <b>{{ ($session->coach->firstname) }}</b></p>

{{--utilisateur dans la session : session->users (attention sans le coach)--}}

<p>La liste des participants inscrits à cette session :</p>
{{--{{$session->users}}--}}
{{--{{dd($session->users->lastname)}}--}}
@foreach($session->users as $user)
    <ul>
        <li>{{ $user->firstname }}  {{ $user->lastname }} {{ $user->age }} ans </li>
    </ul>
@endforeach



<h3>Discutez entre participants :</h3>
{{--    Messages //session->messages--}}
<form action="" method="post" id="formMessage">
    @csrf
    <div>
        <label for="message">Message</label>
        <textarea name="message" cols="50" rows="1" required>votre message...</textarea>
    </div>
    <div>{{--récup le numéro de la session--}}
        <label for="session"></label>
        <input type="hidden" name="session" id="session" value="{{$session->id}}"/>
    </div>
    <div class="col-md-4">
        <button>Envoyer</button>
    </div>

</form>

<div class="col-md-6" id="chatBox">
    @foreach($session->messages as $message)
        <p><b>{{ $message->from->firstname }} a écrit :</b><br> {{ $message->message }}</p>
    @endforeach

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        setInterval('load_messages()', 500)
        function load_messages() {
        $("#chatBox").load(" #chatBox")
        }
    </script>

@endsection



{{--<style>--}}
{{--    #chatbox {--}}
{{--        text-align:left;--}}
{{--        margin:0 auto;--}}
{{--        margin-bottom:25px;--}}
{{--        padding:10px;--}}
{{--        background:#fff;--}}
{{--        height:270px;--}}
{{--        width:500px;--}}
{{--        border:1px solid #ACD8F0;--}}
{{--        overflow:auto; }--}}
{{--</style>--}}
