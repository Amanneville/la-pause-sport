{{--La pause sport--}}
{{--Page PROFIL COACH--}}
@extends('layouts.app')
@section('content')

    <div class="container animate__animated animate__fadeInDown back2 text-white">
        <div class="row">
            <div class="col-md-12 mt5">
                <h3>Bienvenue !</h3>
                <h4>Vous êtes ici, dans votre espace personnel COACH</h4>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 ">

                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;" alt="">
                <h2>{{ $user->name }} modification photo de profil</h2>

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

        <div class="container-fluid">

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
                    <button class="btn btn-primary">Modifier vos informations</button>
                </div>


                <div class="col-md-6"> {{--liste et liens des sessions--}}
                    <h1>Vos sessions:</h1>

                    <table>

                        <tr>
                            <th>#</th>
                            <th>Date de la séance</th>
                            <th>Sport</th>
                            <th>heure de début</th>
                            <th>heure de fin</th>
                            <th>nombre de participants</th>
                            <th>niveau séance</th>
                            <th>Accèder à la séance</th>
                            <th>Mettre à jour</th>
                            <th>supprimer</th>
                        </tr>

                        @foreach($user->sessions as $session)
                            <tr>
                                <td>{{$session->id}}</td>
                                <td>{{ $session->date }}</td>
                                <td>{{ $session->sport_id }}</td>
                                <td>{{ $session->heure_debut }}</td>
                                <td>{{ $session->heure_fin }}</td>
                                <td>{{ $session->nb_max_participants }}</td>
                                <td>{{ $session->niveau }}</td>
                                <td><a href="{{url ('')}}/{{$session->id}}"  class="btn btn-info"></a></td>
                                <td><a href="{{url ('')}}/{{$session->id}}"  class="btn btn-warning"></a></td>
                                <td><a href="{{url ('destroy-session')}}/{{$session->id}}"  class="btn btn-danger"></a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid text-white">
        <div class="row bg-dark align-content-center">
            <div class="col-md-8 ml-5 mr-2  mb-5 text-center">
                <br>
                <h1>Calendrier</h1>
                <div id='calendar'></div>
            </div>

        </div>
    </div>
@endsection
