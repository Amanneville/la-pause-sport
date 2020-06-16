@extends('layouts.app')

@section('content')
<section class="container-fluid text-center  back1">
<div class="container-fluid" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card animate__animated animate__backInDown" style="width:850px;">
                <div class="card-header">Les sessions à côté de chez vous</div>

                <div class="card-body " >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>


                <div class="center fadeInUp">

                    <input type=hidden id=code_postal_user value={{ Auth::user()->code_postal }}/>
                    <input type="button" value="APPEL API METEO" onclick="buttonClickGET()"/>
                    <p id="zone_meteo">Temperature d'aujourd'hui dans votre ville est de:</p>


                    <p>Calendrier</p>
                    <div id='calendar'></div>


                    <div class="row justify-content-center">

                        <div class="card col-md-3 ml-2 mr-2  mb-2" style="width: 18rem;">
                            <div class="center">
                              <img class="card-img-top" src="https://contents.mediadecathlon.com/p1443835/640x0/3cr2/mon-programme-de-musculation-en-plein-air-1.jpg?k=fa5ee78daf5c2722c84dc4f3d539b6fb" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">Session de Muscu</h5>
                                <p class="card-text">Voici une session de Musculation en plein air a bordeaux...</p>
                                <a href="#" class="btn btn-primary">Je Participe</a>
                              </div>
                            </div>
                        </div>


                        <div class="card col-md-3  ml-2 mr-2 mb-2" style="width: 18rem;">
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
                            <div class="center">
                                <img class="card-img-top" src="https://image.freepik.com/photos-gratuite/trail-running-homme-exercant-exterieur-pour-forme-physique_1421-45.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Session de Running</h5>
                                    <p class="card-text">Seance de runnin dans un parc</p>
                                    <a href="#" class="btn btn-primary">Je Participe</a>
                                </div>
                            </div>
                        </div>




                        <div class="card col-md-3 ml-2 mr-2 mb-2" style="width: 18rem;">
                            <div class="single_mixi_portfolio center">
                                <img class="card-img-top" src="https://www.chutmonsecret.com/wp-content/uploads/2016/05/FullSizeRender.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Session de Yoga</h5>
                                    <p class="card-text">Venez vous detendre toute l'apès midi...</p>
                                    <a href="#" class="btn btn-primary">Je Participe</a>
                                </div>
                            </div>
                        </div>
                        <div class="card col-md-3 ml-2 mr-2 mb-2" style="width: 18rem;">
                            <div class="single_mixi_portfolio center">
                                <img class="card-img-top" src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/58c2d623479a4556008b544b.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Session de Fitness</h5>
                                    <p class="card-text">Voici une session de Fitness au parc bordelais...</p>
                                    <a href="#" class="btn btn-primary">Je Participe</a>
                                </div>
                            </div>
                        </div>

                        <div class="card col-md-3 ml-2 mr-2 mb-2" style="width: 18rem;">
                            <div class="single_mixi_portfolio center">
                                <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/_uBTGeSIXQzYbsqH6fuCpszc0_RhzzV-BdgYOqL3ZARZvb41saicFz5MPk-O_fj4RFVXRZKW0M_jKYktuBRlnTW3GmhK53gwupZzSjixiw" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Session de Yoga</h5>
                                    <p class="card-text">Seance de yoga en plein air...</p>
                                    <a href="#" class="btn btn-primary">Je Participe</a>
                                </div>
                            </div>
                        </div>




                        <div class="card col-md-3 ml-2 mr-2  mb-2" style="width: 18rem;">
                            <div class="single_mixi_portfolio center">
                                <img class="card-img-top" src="https://contents.mediadecathlon.com/p1443835/640x0/3cr2/mon-programme-de-musculation-en-plein-air-1.jpg?k=fa5ee78daf5c2722c84dc4f3d539b6fb" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Session de Muscu</h5>
                                    <p class="card-text">Voici une session de Musculation en plein air a bordeaux...</p>
                                    <a href="#" class="btn btn-primary">Je Participe</a>
                                </div>
                            </div>
                        </div>


                        <div class="card col-md-3 ml-2 mr-2 mb-2" style="width: 18rem;">
                            <div class="center">
                                <img class="card-img-top" src="https://image.freepik.com/photos-gratuite/trail-running-homme-exercant-exterieur-pour-forme-physique_1421-45.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Session de Running</h5>
                                    <p class="card-text">Seance de fitness dans un parc</p>
                                    <a href="#" class="btn btn-primary">Je Participe</a>
                                </div>
                            </div>
                        </div>
                        <div class="card col-md-3 mix cat4 cat1 ml-2 mr-2 mb-2" style="width: 18rem;">
                            <div class="center">
                                <img class="card-img-top" src="https://previews.123rf.com/images/warrengoldswain/warrengoldswain1304/warrengoldswain130400146/19141270-trail-running-marathon-athl%C3%A8te-ext%C3%A9rieur-lever-du-soleil-couple-formation-pour-le-fitness-et-mode-de-vie.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Session de Running</h5>
                                    <p class="card-text">Voici une session de Running en plein air à bordeaux...</p>
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
