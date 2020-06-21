{{--La pause sport--}}
{{--Page PROFIL MEMBRE url=/profil--}}

@extends('layouts.app')
@section('content')


    <section class="container-fluid text-center fondpro">
        <div class="container">
            <div class="row justify-content-center">

                <div class="card animate__animated animate__backInDown" style="width:80%">

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
                                <h5>vous êtes ici, dans votre espace membre personnel</h5>
                                <p> et vous êtes parmis nous depuis le {{ date('d-m-Y', strtotime($user->created_at)) }} !</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row ml-5 mt-3">
                            <h5>* Vous êtes inscrit aux sessions suivantes :</h5><br>
                            <p><em>cliquez sur la date pour consulter les informations de la session et accéder au tchat
                                    !</em></p><br>
                        </div>

                        <div class="row ml-5">
                            <ul>
                            @foreach($user->sessions as $session)
                                    <li>Session du : <a href="/infos-session/{{$session->id}}">{{ date('d-m-Y', strtotime($session->date)) }}</a></li>
                                @endforeach
                                </ul>
                        </div>
                        <hr><br>
                        <div class="row text-left ml-5">
                            <div class="col-md-12"><p><b>Rappel des catégories de niveaux :</b></p></div>
                            <ol>
                                <li> comme débutant. Le membre débute dans la pratique de ce sport.</li>
                                <li> comme intermédiaire. Le membre a une certaine aisance dans la pratique de ce sport.</li>
                                <li> comme avancé. Le membre maitrise la pratique de ce sport.</li>
                            </ol>
                        </div>

                        <div class="row ml-5 mt-3">
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
