
@extends('layouts.app')

@section('content')

    <div class="container animate__animated animate__fadeInDown back2">
        <div class="row">
            <div class="col-md-12">
                <h3>Bienvenue sur votre espace personnel Admin</h3>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 ">

                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->name }} modification photo de profil</h2>
                <h4>la modification de photo de profil est conseillé</h4>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Mettre à jour votre image de profil</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>
        </div>
        <br>
        <br>




        <div class="container">
            <div class="row ">

                <div class="col-md-6"> {{--informations personnelles user--}}
                    <h1>Vos informations :</h1><br>
                    <ul>
                        <li><h2>Prénom : </h2>{{ $user->firstname }}</li>
                        <li><h2>Nom : </h2> {{ $user->lastname }}</li>
                        <li><h2>Adresse : </h2>{{ $user->adresse }} ({{ $user->code_postal }})</li><br>
                        <li><h2>Votre adresse mail :</h2>{{ $user->email }}</li><br>
                        <li><h2>Âge : </h2>{{ $user->age }} ans.</li>
                    </ul>

                    <div class="text-center"><img src="{{ $user->avatar }}" alt="" height="100px"></div><br>
                    <div class="text-center"><button>Modifier vos informations</button></div>
                </div>

                <div class="col-md-6"> {{--liste et liens des sessions--}}
                    <h1>Vous êtes inscrit aux sessions suivantes :</h1>
                    <p><em>cliquez sur la date pour consulter les informations de la session et accéder au tchat !</em></p><br>
                    @foreach($user->sessions as $session)
                        <ul>
                            <li><a href="/mes-sessions/{{$session->id}}">{{ $session->date }}</a></li>
                        </ul>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection