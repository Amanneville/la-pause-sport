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


                            <input type="button" value="APPEL API METEO" onclick="buttonClickGET()"/>
                            <p id="zone_meteo">Temperature d'aujourd'hui dans votre ville est de:</p>


                            <p>Calendrier</p>
                            <div id='calendar'></div>



                            <div class="row justify-content-center">

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
