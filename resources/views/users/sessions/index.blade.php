@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Bienvenue sur votre espace personnel</h3>
            </div>
        </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Vous êtes inscrit aux sessions suivantes :</p>
        </div>
    </div>

    @foreach($user->sessions as $session)
        <ul>
            <li><a href="/mes-sessions/{{$session->id}}">{{ $session->date }}</a></li>
        </ul>
    @endforeach


@endsection
