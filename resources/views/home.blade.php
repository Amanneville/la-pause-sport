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


                <div class="main_portfolio_content center wow fadeInUp">

                    <input id="queryLoc" type="text" value="33000"/>
                    <input type="button" value="APPEL API METEO" onclick="buttonClickGET()"/>
                    <p id="zone_meteo">temp</p>

                    <div class="main_mix_menu m-y-2">
                        <ul class="text-uppercase">
                            <li class="filter" data-filter="all">Tout</li>
                            <li class="filter" data-filter=".cat1">Musculation</li>
                            <li class="filter" data-filter=".cat2">Yoga</li>
                            <li class="filter" data-filter=".cat3">Running</li>
                            <li class="filter" data-filter=".cat4">Fitness</li>
                        </ul>
                    </div>


                    <div class="row justify-content-center">

                        <div class="card col-md-4 mix cat4 cat1 ml-2 mr-2 " style="width: 18rem;">
                            <div class="single_mixi_portfolio center">
                              <img class="card-img-top" src="https://contents.mediadecathlon.com/p1443835/640x0/3cr2/mon-programme-de-musculation-en-plein-air-1.jpg?k=fa5ee78daf5c2722c84dc4f3d539b6fb" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">Session de Muscu</h5>
                                <p class="card-text">Voici une session de Musculation en plein air a bordeaux...</p>
                                <a href="#" class="btn btn-primary">Je Participe</a>
                              </div>
                            </div>
                        </div>



                        <div class="card col-md-4 mix cat4 cat1 ml-2 mr-2" style="width: 18rem;">
                            <div class="single_mixi_portfolio center">
                                <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/KD5fXnX8zr29xIchtRkfxIJ0OyV3N-1L48LtJm_6DlP681_f-uFZ5_rM7iotnkd460yy-UJb1-PtZWbOeU4ySdNuVmyvNLhfOYfVoJGqLQ" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Session de Yoga</h5>
                                    <p class="card-text">Seance de yoga en plein air...</p>
                                    <a href="#" class="btn btn-primary">Je Participe</a>
                                </div>
                            </div>
                            </div>


                        <div class="card col-md-4 mix cat4 cat1 ml-2 mr-2" style="width: 18rem;">
                            <div class="single_mixi_portfolio center">
                                <img class="card-img-top" src="https://www.chutmonsecret.com/wp-content/uploads/2016/05/FullSizeRender.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Session de Yoga</h5>
                                    <p class="card-text">Venez vous detendre toute l'apès midi...</p>
                                    <a href="#" class="btn btn-primary">Je Participe</a>
                                </div>
                            </div>
                        </div>
                        <div class="card col-md-4 mix cat4 cat1 ml-2 mr-2" style="width: 18rem;">
                            <div class="single_mixi_portfolio center">
                                <img class="card-img-top" src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/58c2d623479a4556008b544b.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Session de Fitness</h5>
                                    <p class="card-text">Voici une session de Fitness au parc bordelais...</p>
                                    <a href="#" class="btn btn-primary">Je Participe</a>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-md-4 mix cat4 cat1">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="img/projetsiteweb2.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <a href="https://musika-songes.fr/" target="_blank"><i class="fa fa-search"></i></a>
                                        <a href="img/projetsiteweb2.jpg" class="gallery-img"><i class="fa fa-link" target="_blank"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>Site Web Musika Songes</h3>
                                    <p><a href="https://musika-songes.fr/" target="_blank">https://musika-songes.fr</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mix cat2 cat4">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="img/projetsiteweb3.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <a href="https://wiismile.fr/" target="_blank"><i class="fa fa-search"></i></a>
                                        <a href="img/projetsiteweb3.jpg" class="gallery-img" target="_blank"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>Site Wii Smile</h3>
                                    <p><a href="https://wiismile.fr/">https://wiismile.fr</a></p>
                                </div>
                            </div>
                        </div>


                    </div>
            </div>
        </div>
    </div>
</div>
</section>
<script src="{{ asset('js/meteo.js') }}" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery.min.js" defer></script>
@endsection
