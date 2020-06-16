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



                            <div class="row justify-content-center">

                                <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://previews.123rf.com/images/warrengoldswain/warrengoldswain1304/warrengoldswain130400146/19141270-trail-running-marathon-athl%C3%A8te-ext%C3%A9rieur-lever-du-soleil-couple-formation-pour-le-fitness-et-mode-de-vie.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Running</h5>
                                            <p class="card-text">Voici une session de running en plein air à bordeaux...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card col-md-3 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://image.freepik.com/photos-gratuite/trail-running-homme-exercant-exterieur-pour-forme-physique_1421-45.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Running</h5>
                                            <p class="card-text">Seance de running dans un parc</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://previews.123rf.com/images/warrengoldswain/warrengoldswain1304/warrengoldswain130400146/19141270-trail-running-marathon-athl%C3%A8te-ext%C3%A9rieur-lever-du-soleil-couple-formation-pour-le-fitness-et-mode-de-vie.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Running</h5>
                                            <p class="card-text">Voici une session de running en plein air à bordeaux...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card col-md-3 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://image.freepik.com/photos-gratuite/trail-running-homme-exercant-exterieur-pour-forme-physique_1421-45.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Running</h5>
                                            <p class="card-text">Seance de running dans un parc</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://previews.123rf.com/images/warrengoldswain/warrengoldswain1304/warrengoldswain130400146/19141270-trail-running-marathon-athl%C3%A8te-ext%C3%A9rieur-lever-du-soleil-couple-formation-pour-le-fitness-et-mode-de-vie.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Running</h5>
                                            <p class="card-text">Voici une session de running en plein air à bordeaux...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card col-md-3 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://image.freepik.com/photos-gratuite/trail-running-homme-exercant-exterieur-pour-forme-physique_1421-45.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Running</h5>
                                            <p class="card-text">Seance de running dans un parc</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://previews.123rf.com/images/warrengoldswain/warrengoldswain1304/warrengoldswain130400146/19141270-trail-running-marathon-athl%C3%A8te-ext%C3%A9rieur-lever-du-soleil-couple-formation-pour-le-fitness-et-mode-de-vie.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Running</h5>
                                            <p class="card-text">Voici une session de running en plein air à bordeaux...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card col-md-3 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://image.freepik.com/photos-gratuite/trail-running-homme-exercant-exterieur-pour-forme-physique_1421-45.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Running</h5>
                                            <p class="card-text">Seance de running dans un parc</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://previews.123rf.com/images/warrengoldswain/warrengoldswain1304/warrengoldswain130400146/19141270-trail-running-marathon-athl%C3%A8te-ext%C3%A9rieur-lever-du-soleil-couple-formation-pour-le-fitness-et-mode-de-vie.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Running</h5>
                                            <p class="card-text">Voici une session de running en plein air à bordeaux...</p>
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
