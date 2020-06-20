{{--La pause sport--}}
{{--Page PROFIL MEMBRE--}}

@extends('layouts.app')
@section('content')


    <section class="container-fluid text-center  backgroundhomemusculation">
        <div class="container">
            <div class="row justify-content-center">

                <div class="card animate__animated animate__backInDown" style="width:850px;">

                    <div class="card-header">
                        <h4>Bienvenue {{ $user->firstname }} !</h4>
                    </div>

                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>vous êtes ici, dans votre espace membre personnel</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 ml-5 align-items-center">
                                <img src="/uploads/avatars/{{ $user->avatar }}"
                                     style="width:100px; height:100px; float:left; border-radius:50%; margin-right:25px;">
                            </div>
                            <div class="col-md-4">
                                <p> Vous êtes parmis nous depuis le : {{ date('h:m', strtotime($user->created_at)) }}
                                    ! </p>
                            </div>
                        </div>

                        <div class="row justify-content-start">
                            <div class="col-md-12">
                                <p> Vous nous avez indiqué les niveaux suivants pour chacun des sports :</p>
                            </div>
                                <div class="col-md-12">
                                    <ul>

                                    </ul>

                                </div>
                        </div>


                        {{-- PAGE EN COURS AU MOMENT DE LA FUSION !! --}}
                    </div>


                    <div class="container">

                        <br>

                        <div class="container">
                            <div class="row ">


                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 text-center">

                                        {{--                            <img src="/uploads/avatars/{{ $user->avatar }}"--}}
                                        {{--                                 style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">--}}
                                        <h2>{{ $user->name }} Profil</h2>
                                        <form enctype="multipart/form-data" action="/profil" method="POST">
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


                                <div class="col-md-6"> {{--informations personnelles user--}}
                                    <h5>* Vos informations :</h5><br>
                                    <ul>
                                        <li><b>Prénom : </b>{{ $user->firstname }} <b>Nom : </b> {{ $user->lastname }}
                                        </li>
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
                                    <p><em>cliquez sur la date pour consulter les informations de la session et accéder
                                            au tchat !</em>
                                    </p><br>

                                    @foreach($user->sessions as $session)
                                        <ul>
                                            <li><a href="/mes-sessions/{{$session->id}}">{{ $session->date }}</a></li>
                                        </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
