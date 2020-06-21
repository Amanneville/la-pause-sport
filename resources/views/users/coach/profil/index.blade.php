{{--La pause sport--}}
{{--Page PROFIL COACH url=/profil-coach--}}
@extends('layouts.app')
@section('content')

    <section class="container-fluid text-center fondpro">
        <div class="container">
            <div class="row justify-content-center">

                <div class="card animate__animated animate__backInDown" style="width:120%">

                    <div class="card-header">
                        <h4>Bienvenue {{ $user->firstname }} !</h4>
                    </div>

                    <div class="container-fluid mt-2">

                        <div class="row justify-content-center">
                            <div>
                                <img src="/uploads/avatars/{{ $user->avatar }}"
                                     style="width:100px; height:100px; float:left; border-radius:50%; margin-right:25px;">
                            </div>
                        </div>
                        <div class="row justify-content-center mt">
                            <div>
                                <h5>vous êtes ici, dans votre espace coach</h5>
                                <p> et vous êtes parmis nous depuis le {{ date('d-m-Y', strtotime($user->created_at)) }} !</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row ml-5 mt-3 mb-2">
                            <h5>Voici la liste des sessions que vous proposez :</h5>
                        </div>

                        <div class="row ml-2 mr-2"> {{--liste et liens des sessions--}}
                            <table class="table-striped" style="width: 100%" >
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Sport</th>
                                    <th>Heure de début</th>
                                    <th>Heure de fin</th>
                                    <th>Nombre de participants</th>
                                    <th>Niveau séance</th>
                                    <th>Consulter</th>
                                    <th>Mettre à jour</th>
                                    <th>Supprimer</th>
                                </tr>

                                @foreach($sessions as $session)
                                    <tr>
                                        <td>{{$session->id}}</td>
                                        <td>{{ date('d-m-Y', strtotime($session->date)) }}</td>
                                        <td>{{ $session->sports->name }}</td>
                                        <td>{{  date('h:m', strtotime($session->heure_debut)) }}</td>
                                        <td>{{  date('h:m', strtotime($session->heure_fin)) }}</td>
                                        <td>{{ $session->nb_max_participants }}</td>
                                        <td>{{ $session->niveau }}</td>
                                        <td><button><a href="/infos-session/{{$session->id}}"  class="btnVoir"></a></button></td>
                                        <td><button><a href="{{url ('')}}/{{$session->id}}"  class="btnModil"></a></button></td>
                                        <td><button><a href="{{url ('destroy-session')}}/{{$session->id}}"  class="btnSuppr"></a></button></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <hr><br>

                        <div class="row text-left ml-5">
                            <div class="col-md-12"><p><b>Rappel des catégories de niveaux :</b></p></div>
                            <ol>
                                <li> comme débutant. Le membre débute dans la pratique de ce sport.</li>
                                <li> comme intermédiaire. Le membre a une certainer aisance dans la pratique de ce sport.</li>
                                <li> comme avancé. Le membre maitrise la pratique de ce sport.</li>
                            </ol>
                        </div>


                        <div class="row ml-5 mt-5">
                            <h5>* Vos informations personnelles :</h5>
                        </div>

                        <div class="row ml-5 text-left">
                            <div class="col-md-6">
                                <ul>
                                    <li> Nom & prenom : {{ $user->firstname }} {{ $user->lastname }}</li>
                                    <li>{{ $user->age }} ans.</li>
                                    <br>
                                    <li>Adresse : {{ $user->adresse }} ({{ $user->code_postal }})</li>
                                    <li>Email : {{ $user->email }}</li>
                                </ul>
                            </div>

                            <div class="col-md-6 mb-5">
                                <div>
                                    <p>Modifier votre profil :</p>
                                    <button class="btnVert" style="width: 280px">Modifier vos informations</button>
                                </div>
                                <div>
                                    <p>et/ou modifier votre avatar : </p>
                                    <input type="file" name="avatar" class="btnViolet" style="width: 280px">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
                                    <input type="submit" class="pull-right btnViolet" style="width: 280px">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
