{-- PAGE : mes-sessions{id} --}}
{{-- Informations d'une session --}}

@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="row">

            <div class="col-md-12">
                <h4>Informations Session <b>{{ $sessions->sports->name }} !</b></h4><br>
                {{-- Affiche le sport de la session --}}
                <p> Le(la) coach <b>{{ ($sessions->coach->firstname) }}</b> vous propose une session prévue pour le <b>{{ date('d-m-Y', strtotime($sessions->date)) }}</b>, ne tardez pas à vous inscrire !</p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 mt-3">
                <h5><b>Informations nécessaires :</b></h5>
            </div>
            <div class="col-md-6 mt-3">
                <p><b>Le mot du coach :</b></p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>N° référence : {{ $sessions->id }}</li>
                    <li>Heure de début : <b>{{ date('h', strtotime($sessions->heure_debut)) }} h 00</b> soyez à l'heure !</li>
                    <li>Heure de fin :      {{ date('h', strtotime($sessions->heure_fin)) }} h 00, environ !</li>
                    <li>Session : <b>{{ $sessions->titre }}</b></li>
                    <li>Adresse : {{ $sessions->adresse }} à {{ $sessions->ville }} ({{ $sessions->code_postal }})</li>
                    <li>Prix par participants: {{ $sessions->prix }} €</li>
                </ul>
            </div>
            <div class="col-md-6">
                <p>{{ ($sessions->infos) }}</p>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6 mt-2">
                <h5><b>Informations importantes :</b></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol>
                    <li>Le niveau requis pour cette session n'est peut-être pas adapté à votre profil !</li>
                    <p><b>{{ ($sessions->coach->firstname) }}</b> recommande un niveau : {{ $sessions->niveau }}*</p>
                    <li>Pour des questions de sécurité, Le nombre <b>maximal</b> de participants à cette session est de <b>{{ $sessions->nb_max_participants }}</b>.</li>
                    <p><b>Inscrivez-vous avant qu'il n'y est plus de place !</b></p>
                    <li>Une fois, inscrit(e) vous aurez un accès permanent à ses informations mais vous pourrez aussi : </li>
                </ol>
                <lu>
                    <li>Consulter la liste des participants</li>
                    <li>Accèder au forum pour échanger avec les participants et avec notre coach {{ ($sessions->coach->firstname) }} !</li>
                </lu>


            </div>
        </div>

        {{--INSERER UN BOUTON D'INSCRIPTION--}}
        <div class="row mt-3">
            <div class="col-md-6">
                <form action="{{ route('inscription-session.create') }}" method="get">
                    <button class="btnViolet">Inscription</button>
                    <input type="hidden" name="session_id" value="{{ $sessions->id }}"/>
                </form>
            </div>
        </div>





@endsection
