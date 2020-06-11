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

@endsection
