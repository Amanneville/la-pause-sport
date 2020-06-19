@extends('layouts.app')
@section('content')

    <body class="back2">
    <section class="container-fluid text-center">
        <div class="container">
            <div class="row justify-content-center mt-5">

                <div class=" mt-5 card animate__animated animate__backInDown" style="width:850px;">
                    <div class="card-header">Création de session</div>

                    <form action="" method="post">
                        @csrf

                        <div class="col-md-12 "> {{-- ATTENTION C EST UN EXEMPLE LES SPORTS SONT RENSEIGNES ALEATOIREMENT--}}
                            <div class="form-row mt-5">
                            <div class="col-md-6">
                            <h1 class="text-right">Sport :</h1>
                            </div>
                            <div class="col-md-2">
                            <select id="sport" class="form-control" name="sport_id">
                                <option value="1" selected>Musculation</option>
                                <option value="2">Yoga</option>
                                <option value="3">Running</option>
                                <option value="4">Fitness</option>
                            </select>
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3 pt-5">
                                    <label for="date">Date de la séance :</label>
                                    <input type="date" class="form-control" id="date" name="date"
                                           class="{{$errors->has('date') ? 'has-error' : '' }}">
                                    @if($errors->has('date'))
                                        <span class="help-block">
                            <strong>{{$errors->first('date')}}</strong>
                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-3 pt-5">
                                    <label for="heure">Heure de début:</label>
                                    <input type="time" class="form-control" id="heure" name="heure_debut"
                                           class="{{$errors->has('heure_debut') ? 'has-error' : '' }}">
                                    @if($errors->has('heure_debut'))
                                        <span class="help-block">
                            <strong>{{$errors->first('heure_debut')}}</strong>
                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-3 pt-5 ml-2">
                                    <label for="heure">Heure de fin:</label>
                                    <input type="time" class="form-control" id="heure" name="heure_fin"
                                           class="{{$errors->has('heure_fin') ? 'has-error' : '' }}">
                                    @if($errors->has('heure_fin'))
                                        <span class="help-block">
                            <strong>{{$errors->first('heure_fin')}}</strong>
                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group ml-3 mr-3 col-md-5">
                                <label for="adresse">Entrez l'adresse de la séance :</label>
                                <input type="text" class="form-control" id="adresse" name="adresse"
                                       class="{{$errors->has('adresse') ? 'has-error' : '' }}">
                                @if($errors->has('adresse'))
                                    <span class="help-block">
                            <strong>{{$errors->first('adresse')}}</strong>
                        </span>
                                @endif
                            </div>

                            <div class="form-group ml-5 col-md-5">
                                <label for="nb_max_participants">Entrez le nombre maximum de participants</label>
                                <input type="number" class="form-control" id="nb_max_participants"
                                       name="nb_max_participants"
                                       class="{{$errors->has('nb_max_participants') ? 'has-error' : '' }}">
                                @if($errors->has('nb_max_participants'))
                                    <span class="help-block">
                            <strong>{{$errors->first('nb_max_participants')}}</strong>
                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group ml-3 mr-3 col-md-5">
                                <label for="ville">Entrez la ville de la séance</label>
                                <input type="text" class="form-control" id="ville" name="ville"
                                       class="{{$errors->has('ville') ? 'has-error' : '' }}">
                                @if($errors->has('ville'))
                                    <span class="help-block">
                            <strong>{{$errors->first('ville')}}</strong>
                        </span>
                                @endif
                            </div>

                            <div class="form-group ml-5 col-md-5">
                                <label for="prix">Prix de la séance</label>
                                <input type="prix" class="form-control" id="prix" name="prix"
                                       class="{{$errors->has('prix') ? 'has-error' : '' }}">
                                @if($errors->has('prix'))
                                    <span class="help-block">
                            <strong>{{$errors->first('prix')}}</strong>
                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="code_postal">Code postal</label>
                            <input type="text" class="form-control" id="code_postal" name="code_postal"
                                   class="{{$errors->has('code_postal') ? 'has-error' : '' }}">
                            @if($errors->has('code_postal'))
                                <span class="help-block">
                            <strong>{{$errors->first('code_postal')}}</strong>
                            </span>
                            @endif
                        </div>


                            <label for="sport" class="col-md-5">Entrez le niveau de la séance</label>
                        <div class="form-row mb-3">
                            <div class="col-md-6">
                                <select id="niveau" class="form-control ml-3 " name="niveau"
                                        class="{{$errors->has('niveau') ? 'has-error' : '' }}">
                                    <option value="1">Débutant</option>
                                    <option value="2">Intermédiaire</option>
                                    <option value="3">Avancé</option>
                                </select>
                                @if($errors->has('niveau'))
                                    <span class="help-block">
                            <strong>{{$errors->first('niveau')}}</strong>
                        </span>
                                @endif
                            </div>


                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary mt-3 mb-3">Valider la séance</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>


    </section>
    </body>
@endsection
