@extends('layouts.app')

@section('content')
    <section class=" container-fluid text-center  back1">
        <div class="container-fluid" >
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card animate__animated animate__backInDown" style="width:850px;">
                        <div class="card-header">
                            <h5>Consultez nos prochaines sessions et n'hésitez pas à vous inscrire !</h5>
                            </div>


                        {{-- Si personne non membre affiche --}}
                        @guest
                            <div class="center fadeInUp">

                                <br>
                                <p id="zone_meteo" class="mb-5"><em>Connectez-vous pour profiter de toutes les fonctionnalités !</em></p>

                                <div class="container">
                                    <div class="row">

                                        {{-- ajouter une nouvelle session --}}
                                        <div class="card col-md-4 mb-2" style="width: 18rem;">
                                            <div class="center">
                                                <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/OOjs_UI_icon_add.svg/1200px-OOjs_UI_icon_add.svg.png" alt="Card image cap">
                                                <div class="card-body">
                                                    <h3 class="card-title">Créer une nouvelle session.</h3>
                                                    <p class="card-text">+</p>
                                                    <a href="#" class="btnViolet">Accès aux membres.</a>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Afficher toutes les sessions--}}
                                        @foreach($sessions ?? '' as $session)
                                            <div class="card col-md-4 mb-2" style="width: 18rem;">
                                                <div class="center">
                                                    <img class="card-img-top" src="https://image.freepik.com/photos-gratuite/trail-running-homme-exercant-exterieur-pour-forme-physique_1421-45.jpg" alt="">
                                                    <div class="card-body">
                                                        <p class="card-text">Session</p>
                                                        <h3 class="card-text">{{ $session->name }}</h3>
                                                        <h5 class="card-text">{{ $session->titre }}</h5>
                                                        <h5 class="card-text">à <b>{{ $session->ville }}</b></h5>



                                                        <p class="card-text">Niveau requis : {{ $session->niveau }}</p>
                                                        <p class="card-title">Date : <b>{{ date('d-m-Y', strtotime($session->date)) }}</b></p>
{{--                                                        <p class="card-text">Nombre de participants : {{ $session->nb_max_participants }}</p>--}}
{{--                                                        <p class="card-text">Prix de la session : {{ $session->prix }}€</p>--}}

                                                        <a href="#" class="btnVert">Plus d'informations</a>
                                                        <p class="nbInfo"><em>Accessible aux membres</em></p>
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
                                                    <h5 class="card-title">Créer une nouvelle session.</h5>
                                                    <p class="card-text">+</p>
                                                    <a href="{{ url('/session') }}" class="btnViolet">Ajouter</a>
                                                </div>
                                            </div>
                                        </div>

                                        @foreach($sessions ?? '' as $session)

                                            {{-- Afficher toutes les sessions de musculation--}}

                                            <div class="card col-md-4 mb-2" style="width: 18rem;">
                                                <div class="center">
                                                    <img class="card-img-top" src="https://image.freepik.com/photos-gratuite/trail-running-homme-exercant-exterieur-pour-forme-physique_1421-45.jpg" alt="">
                                                    <div class="card-body">
                                                        <p class="card-text">Session</p>
                                                        <h3 class="card-text">{{ $session->sports->name }}</h3>
                                                        <h5 class="card-text">{{ $session->titre }}</h5>
                                                        <h5 class="card-text">à <b>{{ $session->ville }}</b></h5>
                                                        <p class="card-text">Niveau requis : {{ $session->niveau }}</p>
                                                        <p class="card-title">Date : <b>{{ date('d-m-Y', strtotime($session->date)) }}</b></p>

                                                        <p class="card-text">Heure début : {{  date('h:m', strtotime($session->heure_debut)) }}</p>
                                                        <p class="card-text">Prix de la session : <b>{{ $session->prix }}</b> €</p>

                                                        <a href="/infos-session/{{$session->id}}" class="btnVert">Plus d'informations</a>
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
    </section>
@endsection
