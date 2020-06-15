@extends('layouts.master')
@section('content')
    @if(!empty($successMessage))
        <p>{{ $successMessage }}</p>
    @endif

    <form action="" method="post">
        @csrf

        <label for="from">Nom</label>
        <input type="text" name="from" placeholder="from">

        <label for="to">Destinataire</label>
        <input type="text" name="to" placeholder="to">

        <label for="is_read">Lu/Non lu</label>
        <input type="number" name="is_read" placeholder="is_read">

        <label for="session_id">N° Session</label>
        <input type="number" name="session_id" placeholder="session_id">

        <label for="message">Message</label>
        <textarea name="message" cols="20" rows="5">Votre message...</textarea>

        <button>Envoyer</button>
    </form>


    <br>
    <h3>Table des messages de la Session N°2 - ordre récents->anciens</h3>
    <table>
        <thead>
        <tr class="table table-dark">
            <td>Session_id</td>
            <td>#</td>
            <td>from</td>
            <td>to</td>
            <td>message</td>
            <td>read</td>
            <td>date msg</td>

        </tr>
        </thead>
        @foreach($messages as $message)
            <tr>
                <td>{{ $message->session_id }}</td>
                <td>{{ $message->id }}</td>
                <td>{{ $message->from }}</td>
                <td>{{ $message->to }}</td>
                <td>{{ $message->message }}</td>
                <td>{{ $message->is_read }}</td>
                <td>{{ $message->created_at }}</td>
            </tr>
        @endforeach
    </table>
@endsection




