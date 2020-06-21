{{--La pause sport--}}
{{--PAGE affiche les sessions RUNNING du niveau de l'user connecté--}}

@extends('layouts.app')
@section('content')
    <section class="container-fluid text-center  backgroundhomemusculation">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card animate__animated animate__backInDown" style="width:850px;">
                        <div class="card-header">
                            <h5>Ici, pour vous, les sessions running de votre niveau !</h5></div>


                        @guest
                            {{-- page accéssible uniquement par les membres connectés --}}
                        @else

                            {{-- API METEO --}}
                            <div class="center fadeInUp">
                                <input type="hidden" id="code_postal_user" value="{{ Auth::user()->code_postal }}"/>
                                <input type="button" value="APPEL API METEO" onclick="buttonClickGET()"/>
                                <p id="zone_meteo" class="mb-5">Temperature d'aujourd'hui dans votre ville est de: </p>

                                {{-- CARD AJOUT NOUVELLE SESSION --}}
                                <div class="container">
                                    <div class="row">
                                        <div class="card col-md-4 mb-2" style="width: 18rem;">
                                            <div class="center">

                                                <div class="card-body">
                                                    <p class="card-title">Créer une nouvelle session.</p>
                                                    <a href="{{ url('/session') }}" class="btnViolet">Ajouter</a>
                                                </div>
                                            </div>
                                        </div>

                                        @foreach($sessions as $session)
                                            {{-- Afficher toutes les sessions de musculation RAJOUTER UNE CONDITION POUR VERIFIER SI LUSER A UN SPORT--}}
                                            @if($session->niveau === intval(Auth::user()->sport(4)->level_id))
                                                <div class="card col-md-4 mb-2" style="width: 18rem;">
                                                    <div class="center">
                                                        <img class="card-img-top"
                                                             src="https://image.freepik.com/photos-gratuite/trail-running-homme-exercant-exterieur-pour-forme-physique_1421-45.jpg"
                                                             alt="">
                                                        <div class="card-body">
                                                            <h2 class="card-text">Session Running</h2>
                                                            <h5 class="card-text">à <b>{{ $session->ville }}</b></h5>
                                                            <p class="card-text">Niveau requis
                                                                : {{ $session->niveau }}</p>
                                                            <p class="card-title">Date :
                                                                <b>{{ date('d-m-Y', strtotime($session->date)) }}</b>
                                                            </p>

                                                            <p class="card-text">Heure début
                                                                : {{  date('h:m', strtotime($session->heure_debut)) }}</p>
                                                            <p class="card-text">Prix de la session :
                                                                <b>{{ $session->prix }}</b> €</p>
                                                            <a href="/infos-session/{{$session->id}}" class="btnVert">Plus
                                                                d'informations</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
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
