@extends('layouts.app')

@section('content')

    <div class="animate__animated animate__fadeInDown">
        <div class="back2 ">
            <div class="container text-center mb-5">

                <div class="row justify-content-center">
                    <div class="col-md-8 mt-5">
                        <div class="card" style="width:850px;">

                            <div class="card-header">Bienvenue sur votre espace personnel</div>


                            <br>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 text-center">

                                    <img src="/uploads/avatars/{{ $user->avatar }}"
                                         style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                                    <h2>{{ $user->name }} Profil</h2>
                                    <form enctype="multipart/form-data" action="/profile" method="POST">
                                        <label>Mettre à jour votre image de profil</label>
                                        <br>
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

                                    <div class="col-md-6 text-left"> {{--informations personnelles user--}}
                                        <h1>Vos informations :</h1><br>

                                        <h4>Prénom : </h4>{{ $user->firstname }}</li>
                                        <h4>Nom : </h4> {{ $user->lastname }}</li>
                                        <h4>Adresse : </h4>{{ $user->adresse }} ({{ $user->code_postal }})</li>
                                        <br>
                                        <h4>Votre adresse mail :</h4>{{ $user->email }}</li>
                                        <br>
                                        <h4>Âge : </h4>{{ $user->age }} ans.</li>


                                        <div class="text-center"><img src="{{ $user->avatar }}" alt="" height="100px">
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <button>Modifier vos informations</button>
                                        </div>
                                    </div>

                                    <div class="col-md-6"> {{--liste et liens des sessions--}}
                                        <h1>* Vous êtes inscrit aux sessions suivantes :</h1>
                                        <h5><em>cliquez sur la date pour consulter les informations de la session et
                                                accéder au tchat !</em></h5><br>
                                        @foreach($user->sessions as $session)
                                            <ul>
                                                <li><a href="/mes-sessions/{{$session->id}}">{{ $session->date }}</a>
                                                </li>
                                            </ul>
                                        @endforeach
                                    </div>

                                </div>
                                <br>
                                <br>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid text-white">
                <div class="row bg-dark align-content-center">
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-md-8 ml-5 mr-2  mb-5 text-center">
                                <br>
                                <h1>Calendrier</h1>
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div

@endsection
