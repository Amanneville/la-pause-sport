@extends('layouts.app')
@section('content')
    <div class="container pt-5">

              <form action="" method="post">
            @csrf

            <label for="sport" class="col-md-5">{{ __('sport') }}</label>
            <div class="col-md-6"> {{-- ATTENTION C EST UN EXEMPLE LES SPORTS SONT RENSEIGNES ALEATOIREMENT--}}
                <select id="sport" class="form-control" name="sport_id">
                    <option value="1" >Musculation</option>
                    <option value="2">Yoga</option>
                    <option value="3">Running</option>
                    <option value="4">Fitness</option>
                </select>
                <div class="form-group col-md-6 pt-5">
                    <label for="date">Entrez la date de la séance :</label>
                    <input type="date" class="form-control" id="date" name="date"
                           class="{{$errors->has('date') ? 'has-error' : '' }}">
                    @if($errors->has('date'))
                        <span class="help-block">
                            <strong>{{$errors->first('date')}}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6 pt-5">
                    <label for="heure">Entrez l'heure de début de la séance :</label>
                    <input type="time" class="form-control" id="heure" name="heure_debut"
                           class="{{$errors->has('heure_debut') ? 'has-error' : '' }}">
                    @if($errors->has('heure_debut'))
                        <span class="help-block">
                            <strong>{{$errors->first('heure_debut')}}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6 pt-5">
                    <label for="heure">Entrez l'heure de fin de de la séance :</label>
                    <input type="time" class="form-control" id="heure" name="heure_fin"
                           class="{{$errors->has('heure_fin') ? 'has-error' : '' }}">
                    @if($errors->has('heure_fin'))
                        <span class="help-block">
                            <strong>{{$errors->first('heure_fin')}}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="adresse">Entrez l'adresse de la séance :</label>
                    <input type="text" class="form-control" id="adresse" name="adresse"
                           class="{{$errors->has('adresse') ? 'has-error' : '' }}">
                    @if($errors->has('adresse'))
                        <span class="help-block">
                            <strong>{{$errors->first('adresse')}}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="nb_max_participants">Entrez le nombre maximum de participants</label>
                    <input type="number" class="form-control" id="nb_max_participants" name="nb_max_participants"
                           class="{{$errors->has('nb_max_participants') ? 'has-error' : '' }}">
                    @if($errors->has('nb_max_participants'))
                        <span class="help-block">
                            <strong>{{$errors->first('nb_max_participants')}}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="titre">Titre de la session</label>
                    <input type="text" class="form-control" id="titre" name="titre"
                           class="{{$errors->has('titre') ? 'has-error' : '' }}">
                    @if($errors->has('titre'))
                        <span class="help-block">
                            <strong>{{$errors->first('titre')}}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="ville">Entrez la ville de la séance</label>
                    <input type="text" class="form-control" id="ville" name="ville"
                           class="{{$errors->has('ville') ? 'has-error' : '' }}">
                    @if($errors->has('ville'))
                        <span class="help-block">
                            <strong>{{$errors->first('ville')}}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
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

            <div class="form-row">
                <label for="sport" class="col-md-5">Entrez le niveau de la séance</label>
                <div class="col-md-6">
                    <select id="niveau" class="form-control" name="niveau"
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
            </div>

            <div class="form-group col-md-6">
                <label for="infos">Description</label>
                <input type="text" class="form-control" id="infos" name="infos"
                       class="{{$errors->has('infos') ? 'has-error' : '' }}">
                @if($errors->has('infos'))
                    <span class="help-block">
                            <strong>{{$errors->first('infos')}}</strong>
                        </span>
                @endif
            </div>


            <div>
                <button type="submit" class="btn btn-primary">Valider la séance</button>
            </div>
        </form>
    </div>
@endsection

@section('script-footer')
    @endsection
