@extends('layouts.app')

@section('content')
    <section class="container-fluid text-center  backgroundhomeyoga">
        <div class="container-fluid" >
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card animate__animated animate__backInDown" style="width:850px;">
                        <div class="card-header">Les sessions de yoga à côté de chez vous</div>

                        <div class="card-body " >
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>


                        <div class="center fadeInUp">


                            <<input type="hidden" id="code_postal_user" value="{{ Auth::user()->code_postal }}"/>
                            <input type="button" value="APPEL API METEO" onclick="buttonClickGET()"/>
                            <p id="zone_meteo" class="mb-5">Temperature d'aujourd'hui dans votre ville est de: </p>



                            <div class="col-md-8 ml-5 mr-2  mb-5 text-center">
                                <p>Calendrier</p>
                                <div id='calendar'></div>
                            </div>



                            <div class="row justify-content-center">

                                @foreach($user->sessions as $session)

                                    // ajouter une nouvelle session

                                    <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                                        <div class="center">
                                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/OOjs_UI_icon_add.svg/1200px-OOjs_UI_icon_add.svg.png" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">crée une nouvelle session</h5>
                                                <p class="card-text">+</p>
                                                <a href="{{ url('/session') }}" class="btn btn-primary">ajouter</a>
                                            </div>
                                        </div>
                                    </div>

                                    //afficher toute les sessions

                                    @foreach($user->sessions as $session)

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
                                                <a href="{{ url('/mes-sessions/'}}).{{ $session->id }}" class="btn btn-primary">Je participe</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="card col-md-3 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/_uBTGeSIXQzYbsqH6fuCpszc0_RhzzV-BdgYOqL3ZARZvb41saicFz5MPk-O_fj4RFVXRZKW0M_jKYktuBRlnTW3GmhK53gwupZzSjixiw" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Yoga</h5>
                                            <p class="card-text">Seance de yoga en plein air...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="card col-md-3 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="enter">
                                        <img class="card-img-top" src="https://www.chutmonsecret.com/wp-content/uploads/2016/05/FullSizeRender.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Yoga</h5>
                                            <p class="card-text">Venez vous detendre toute l'apès midi...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="single_mixi_portfolio center">
                                        <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/_uBTGeSIXQzYbsqH6fuCpszc0_RhzzV-BdgYOqL3ZARZvb41saicFz5MPk-O_fj4RFVXRZKW0M_jKYktuBRlnTW3GmhK53gwupZzSjixiw" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Yoga</h5>
                                            <p class="card-text">Seance de yoga en plein air...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>




                                <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="single_mixi_portfolio center">
                                        <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/_uBTGeSIXQzYbsqH6fuCpszc0_RhzzV-BdgYOqL3ZARZvb41saicFz5MPk-O_fj4RFVXRZKW0M_jKYktuBRlnTW3GmhK53gwupZzSjixiw" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Yoga</h5>
                                            <p class="card-text">Seance de yoga en plein air...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="single_mixi_portfolio center">
                                        <img class="card-img-top" src="https://www.chutmonsecret.com/wp-content/uploads/2016/05/FullSizeRender.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Yoga</h5>
                                            <p class="card-text">Venez vous detendre toute l'apès midi...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="single_mixi_portfolio center">
                                        <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/_uBTGeSIXQzYbsqH6fuCpszc0_RhzzV-BdgYOqL3ZARZvb41saicFz5MPk-O_fj4RFVXRZKW0M_jKYktuBRlnTW3GmhK53gwupZzSjixiw" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Yoga</h5>
                                            <p class="card-text">Seance de yoga en plein air...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="single_mixi_portfolio center">
                                        <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/_uBTGeSIXQzYbsqH6fuCpszc0_RhzzV-BdgYOqL3ZARZvb41saicFz5MPk-O_fj4RFVXRZKW0M_jKYktuBRlnTW3GmhK53gwupZzSjixiw" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Yoga</h5>
                                            <p class="card-text">Seance de yoga en plein air...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="single_mixi_portfolio center">
                                        <img class="card-img-top" src="https://www.chutmonsecret.com/wp-content/uploads/2016/05/FullSizeRender.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Yoga</h5>
                                            <p class="card-text">Venez vous detendre toute l'apès midi...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="single_mixi_portfolio center">
                                        <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/_uBTGeSIXQzYbsqH6fuCpszc0_RhzzV-BdgYOqL3ZARZvb41saicFz5MPk-O_fj4RFVXRZKW0M_jKYktuBRlnTW3GmhK53gwupZzSjixiw" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Yoga</h5>
                                            <p class="card-text">Seance de yoga en plein air...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
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
