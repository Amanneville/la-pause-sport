@extends('layouts.app')

@section('content')

    <div class="container animate__animated animate__fadeInDown back2">

        <div class="row">
            <div class="col-md-12">
                <h3>Dashboard</h3>
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

        <div class="row">
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
                    <td>consulter</td>
                    <td>Modifier</td>
                    <td>Supprimer</td>

                </tr>
                </thead>
                <tbody>
                @foreach($sessions as $session)
                    <tr>
                        <td>{{ $session->id }}</td>
                        <td>{{ $session->auteur_id }}</td>
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
                        <td><a href="{{$session->id}}" class="btn btn-info">voir</a></td>
                        <td><a href="{{url ('')}}/{{$session->id}}"  class="btn btn-warning">modifier</a></td>
                        <td><a href="{{url ('')}}/{{$session->id}}"  class="btn btn-danger">supprimer</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

        <div class="row">
            <table>
                <thead>
                <tr class="table table-dark">
                    <td>#</td>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Role</td>
                    <td>consulter</td>
                    <td>Modifier</td>
                    <td>Supprimer</td>

                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user }}</td>
                        <td><a href="{{$user->id}}" class="btn btn-info">voir</a></td>
                        <td><a href="{{url ('')}}/{{$user->id}}"  class="btn btn-warning">modifier</a></td>
                        <td><a href="{{url ('')}}/{{$user->id}}"  class="btn btn-danger">supprimer</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>




        <div class="container">
            <div class="row ">


            </div>
        </div>
    </div>
@endsection
