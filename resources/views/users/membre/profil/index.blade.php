@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Bienvenue sur votre espace personnel</h3>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row ">

                <div class="col-md-6"> {{--informations personnelles user--}}
                    <h5>* Vos informations :</h5><br>
                    <ul>
                        <li><b>Prénom : </b>{{ $user->firstname }} <b>Nom : </b> {{ $user->lastname }}</li>
                        <li><b>Adresse : </b>{{ $user->adresse }} ({{ $user->code_postal }})</li>
                        <br>
                        <li><b>Votre adresse mail :</b>{{ $user->email }}</li>
                        <br>
                        <li><b>Âge : </b>{{ $user->age }} ans.</li>
                    </ul>

                    <div class="text-center"><img src="{{ $user->avatar }}" alt="" height="100px"></div>
                    <br>
                    <div class="text-center">
                        <button>Modifier vos informations</button>
                    </div>
                </div>

                <div class="col-md-6"> {{--liste et liens des sessions--}}
                    <h5>* Vous êtes inscrit aux sessions suivantes :</h5>
                    <p><em>cliquez sur la date pour consulter les informations de la session et accéder au tchat !</em>
                    </p><br>

                    @foreach($user->sessions as $session)
                        <ul>
                            <li><a href="/mes-sessions/{{$session->id}}">{{ $session->date }}</a></li>
                        </ul>
                    @endforeach
                </div>

            </div>
        </div>
@endsection
