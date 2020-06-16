@extends('layouts.master')
@section('content')
    <div class="container pt-5">
        <form action="" method="post">
            @csrf
            <label for="sport" class="col-md-5">{{ __('sport') }}</label>
            <div class="col-md-6"> {{-- ATTENTION C EST UN EXEMPLE LES SPORTS SONT RENSEIGNES ALEATOIREMENT--}}
                <select id="sport" class="form-control" name="sport">
                    <option value="1" selected>Musculation</option>
                    <option value="2">Yoga</option>
                    <option value="3">Running</option>
                    <option value="4">Fitness</option>
                </select>
                <div class="form-group col-md-6 pt-5">
                    <label for="date">Entrez la date de la séance :</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group col-md-6 pt-5">
                    <label for="heure">Entrez l'heure de début de la séance :</label>
                    <input type="time" class="form-control" id="heure" name="heure_debut">
                </div>
                <div class="form-group col-md-6 pt-5">
                    <label for="heure">Entrez l'heure de fin de de la séance :</label>
                    <input type="time" class="form-control" id="heure" name="heure_fin">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="adresse">Entrez l'adresse de la séance :</label>
                    <input type="text" class="form-control" id="adresse" name="adresse">
                </div>
                <div class="form-group col-md-6">
                    <label for="nb_max_participants">Entrez le nombre maximum de participants</label>
                    <input type="number" class="form-control" id="nb_max_participants" name="nb_max_participants">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ville">Entrez la ville de la séance</label>
                    <input type="text" class="form-control" id="ville" name="ville">
                </div>
                <div class="form-group col-md-6">
                    <label for="prix">Prix de la séance</label>
                    <input type="prix" class="form-control" id="prix" name="prix">
                </div>
            </div>
            <div class="form-row">
            <label for="sport" class="col-md-5">Entrez le niveau de la séance</label>
            <div class="col-md-6">
                <select id="niveau" class="form-control" name="niveau">
                    <option value="1">Débutant</option>
                    <option value="2">Intermédiaire</option>
                    <option value="3">Avancé</option>
                </select>
            </div>

                <div class="form-group col-md-2">
                    <label for="code_postal">Code postal</label>
                    <input type="text" class="form-control" id="code_postal" name="code_postal">
                </div>

            </div>

            <div>
            <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
@endsection
