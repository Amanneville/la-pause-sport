@extends('layouts.app')

@section('content')
    <section class="container-fluid text-center  backgroundhomerunning">
        <div class="container-fluid" >
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card animate__animated animate__backInDown" style="width:850px;">
                        <div class="card-header">Les sessions de running à côté de chez vous</div>

                        <div class="card-body " >
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>


                        <div class="center fadeInUp">


                            <input type="hidden" id="code_postal_user" value="{{ Auth::user()->code_postal }}"/>
                            <input type="button" value="APPEL API METEO" onclick="buttonClickGET()"/>
                            <p id="zone_meteo" class="mb-5">Temperature d'aujourd'hui dans votre ville est de: </p>



                            <div class="col-md-8 ml-5 mr-2  mb-5 text-center">
                                <p>Calendrier</p>
                                <div id='calendar'></div>
                            </div>



                            <div class="container">
                                <div class="row justify-content-center">

                                    @foreach($sessions as $session)


                                        {{-- Afficher toutes les sessions de musculation--}}

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
                                                    <a href="{{ url('/mes-sessions/'. $session->id) }}" class="btn btn-primary">Je participe</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
