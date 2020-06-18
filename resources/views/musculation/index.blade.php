@extends('layouts.app')

@section('content')
    <section class="container-fluid text-center  backgroundhomemusculation">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card animate__animated animate__backInDown" style="width:850px;">
                        <div class="card-header">Les sessions de musculation à côté de chez vous</div>


                            {{-- Si personne non membre affiche --}}
                            @guest
                            <div class="center fadeInUp">

                                <br>
                                <p id="zone_meteo" class="mb-5">Connectez vous pour profité de toutes les fonctionnalités</p>

                                <div class="container">
                                  <div class="row">


                                    {{-- ajouter une nouvelle session --}}

                                    <div class="card col-md-4 mb-2" style="width: 18rem;">
                                        <div class="center">
                                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/OOjs_UI_icon_add.svg/1200px-OOjs_UI_icon_add.svg.png" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">crée une nouvelle session</h5>
                                                <p class="card-text">+</p>
                                                <a href="#" class="btn btn-danger">Accès seulement aux membres</a>
                                            </div>
                                        </div>
                                    </div>


                                    {{-- Afficher toutes les sessions de musculation--}}
                                        @foreach($sessions as $session)
                                            <div class="card col-md-4 mb-2" style="width: 18rem;">
                                                <div class="center">
                                                    <img class="card-img-top" src="https://image.freepik.com/photos-gratuite/trail-running-homme-exercant-exterieur-pour-forme-physique_1421-45.jpg" alt="">
                                                    <div class="card-body">
                                                        <h2 class="card-text">Session Musculation</h2>
                                                        <h4 class="card-text">{{ $session->ville }}</h4>
                                                        <p class="card-text">Niveau requis : {{ $session->niveau }}</p>
                                                        <p class="card-title">Date : {{ $session->date }}</p>
                                                        <p class="card-text">Nombre de participants : {{ $session->nb_max_participants }}</p>
                                                        <p class="card-text">Prix de la session : {{ $session->prix }}€</p>
                                                        <p class="card-text">informations uniquement aux membres</p>
                                                        <a href="#" class="btn btn-success">informations session</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                  </div>

                                </div>
                            </div>

                            @else
                            <div class="center fadeInUp">


                                <input type="hidden" id="code_postal_user" value="{{ Auth::user()->code_postal }}"/>
                                <input type="button" value="APPEL API METEO" onclick="buttonClickGET()"/>
                                <p id="zone_meteo" class="mb-5">Temperature d'aujourd'hui dans votre ville est de: </p>

                              <div class="container">

                                <div class="row">

                                  <div class="card col-md-4 mb-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/OOjs_UI_icon_add.svg/1200px-OOjs_UI_icon_add.svg.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">crée une nouvelle session</h5>
                                            <p class="card-text">+</p>
                                            <a href="{{ url('/session') }}" class="btn btn-success">ajouter</a>
                                        </div>
                                    </div>
                                </div>

                                  @foreach($sessions as $session)


                                    {{-- Afficher toutes les sessions de musculation--}}

                                      <div class="card col-md-4 mb-2" style="width: 18rem;">
                                        <div class="center">
                                            <img class="card-img-top" src="https://image.freepik.com/photos-gratuite/trail-running-homme-exercant-exterieur-pour-forme-physique_1421-45.jpg" alt="">
                                            <div class="card-body">
                                                <h2 class="card-text">Session Musculation</h2>
                                                <h4 class="card-text">{{ $session->ville }}</h4>
                                                <p class="card-text">Niveau requis : {{ $session->niveau }}</p>
                                                <p class="card-title">Date : {{ $session->date }}</p>
                                                <p class="card-text">Heure début : {{ $session->heure_debut }}</p>
                                                <p class="card-text">Heure fin : {{ $session->heure_fin }}</p>
                                                <p class="card-text">Nombre de participants : {{ $session->nb_max_participants }}</p>
                                                <p class="card-text">Prix de la session : {{ $session->prix }}€</p>
                                                <a href="{{ url('/mes-sessions/'. $session->id) }}" class="btn btn-success">Informations session</a>
                                            </div>
                                        </div>
                                      </div>

                                  @endforeach
                                </div>

                              </div>
                            </div>

                            @endguest

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
