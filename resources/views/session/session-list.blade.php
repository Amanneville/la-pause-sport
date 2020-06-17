@extends('layouts.master')
@section('content')

    <table>
        <thead>
        <tr class="table table-dark">
            <td>N° Session</td>
            <td>Coach</td>
            <td>Sport</td>
            <td>Heure début</td>
            <td>Heure fin</td>
            <td>Date</td>
            <td>Adresse</td>
            <td>Code postal</td>
            <td>Ville</td>
            <td>Niveau requis</td>
            <td>Nombre de participants</td>
            <td>Prix de la session</td>
            <td>Note attribuée</td>
            <td>Réf. Tchat</td>

        </tr>
        </thead>
        <tbody>
        @foreach($sessions as $session)
            <tr>
                <td>{{ $session->id }}</td>
                <td>{{ $session->id_auteur }}</td>
{{--                id_sport = name voir récupération du nom dans le SessionListController--}}
{{--                <td>{{ $session-> id_sport}}</td>--}}
                <td>{{ $session->name }}</td>
                <td>{{ $session->heure_debut }}</td>
                <td>{{ $session->heure_fin }}</td>
                <td>{{ $session->date }}</td>
                <td>{{ $session->adresse }}</td>
                <td>{{ $session->code_postal }}</td>
                <td>{{ $session->ville }}</td>
                <td>{{ $session->niveau }}</td>
                <td>{{ $session->nb_max_participants }}</td>
                <td>{{ $session->prix }}  €</td>
                <td>{{ $session->note }}</td>
                <td>{{ $session->chat_id }}</td>
            </tr>
        @endforeach


        </tbody>
    </table>


    @foreach($user->sessions as $session)

        <div class="card col-md-3 ml-2 mr-2 mb-2" style="width: 18rem;">
            <div class="center">
                <img class="card-img-top" src="https://image.freepik.com/photos-gratuite/trail-running-homme-exercant-exterieur-pour-forme-physique_1421-45.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">N° Session : {{ $session->id }}</h5>
                    <h5 class="card-title">Sport : {{ $session->name }}</h5>
                    <h5 class="card-title">Coach : {{ $session->id_auteur }}</h5>
                    <h5 class="card-title">Date : {{ $session->date }}</h5>
                    <h5 class="card-title">Adresse : {{ $session->adresse }}</h5>
                    <p class="card-text">Code postal : {{ $session->code_postal }}</p>
                    <p class="card-text">Heure début : {{ $session->heure_debut }}</p>
                    <p class="card-text">Heure fin : {{ $session->heure_fin }}</p>
                    <p class="card-text">Ville : {{ $session->ville }}</p>
                    <p class="card-text">Niveau requis : {{ $session->niveau }}</p>
                    <p class="card-text">Nombre de participants : {{ $session->nb_max_participants }}</p>
                    <p class="card-text">Prix de la session : {{ $session->prix }}</p>
                    <p class="card-text">Note attribuée : {{ $session->note }}</p>
                    <p class="card-text">Réf. Tchat : {{ $session->chat_id }}</p>
                    <a href="{{ url('/mes-sessions/'}}).{{ $session->id }}" class="btn btn-primary">Je participe</a>
                </div>
            </div>
        </div>
    @endforeach


@endsection
