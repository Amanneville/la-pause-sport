@extends('layouts.app')

@section('content')
    <section class="container-fluid text-center  backgroundhomefitness">
        <div class="container-fluid" >
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card animate__animated animate__backInDown" style="width:850px;">
                        <div class="card-header">Les sessions de fitness à côté de chez vous</div>

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


                                <div class="card col-md-3 ml-2 mr-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/58c2d623479a4556008b544b.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Fitness</h5>
                                            <p class="card-text">Voici une session de Fitness au parc bordelais...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-3 ml-2 mr-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/58c2d623479a4556008b544b.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Fitness</h5>
                                            <p class="card-text">Voici une session de Fitness au parc bordelais...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-3 ml-2 mr-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/58c2d623479a4556008b544b.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Fitness</h5>
                                            <p class="card-text">Voici une session de Fitness au parc bordelais...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-3 ml-2 mr-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/58c2d623479a4556008b544b.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Fitness</h5>
                                            <p class="card-text">Voici une session de Fitness au parc bordelais...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-3 ml-2 mr-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/58c2d623479a4556008b544b.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Fitness</h5>
                                            <p class="card-text">Voici une session de Fitness au parc bordelais...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-3 ml-2 mr-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/58c2d623479a4556008b544b.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Fitness</h5>
                                            <p class="card-text">Voici une session de Fitness au parc bordelais...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-3 ml-2 mr-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/58c2d623479a4556008b544b.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Fitness</h5>
                                            <p class="card-text">Voici une session de Fitness au parc bordelais...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-3 ml-2 mr-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/58c2d623479a4556008b544b.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Fitness</h5>
                                            <p class="card-text">Voici une session de Fitness au parc bordelais...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-3 ml-2 mr-2" style="width: 18rem;">
                                    <div class="center">
                                        <img class="card-img-top" src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/58c2d623479a4556008b544b.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Session de Fitness</h5>
                                            <p class="card-text">Voici une session de Fitness au parc bordelais...</p>
                                            <a href="#" class="btn btn-primary">Je Participe</a>
                                        </div>
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
