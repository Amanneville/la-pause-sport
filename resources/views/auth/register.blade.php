{{--La pause sport--}}
{{-- PAGE inscription users : coach & membre--}}

@extends('layouts.app')
@section('content')

    <section class="container-fluid text-center  back4">
        <div class="container-fluid" style="width:auto; height:1100px">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card animate__animated animate__backInDown"
                         style="width:100%; position: relative; top: 50px">

{{--BOUTONS membre ou coach--}}
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-md-12 mt-5 mb-2">
                                    <h6><p class="title_axe">Vous souhaitez créer un compte ?</p></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-5 d-flex align-items-center justify-content-center">
                                    <button id="registerMember" class="btnViolet" type="button"><span>Membre</span></button>
                                    <p class="mr-2 ml-2">ou</p>
                                    <button id="registerCoach" class="btnVert" type="button"><span>Coach</span></button>
                                </div>
                            </div>
                        </div>

{{--FORMULAIRE INSCRIPTION PARTIE AUTHENTIFICATION--}}
                            <form enctype="multipart/form-data" method="POST" action="{{ route('register') }}"
                                  class="d-none">
                                @csrf
{{--PRENOM--}}
                                <div>
                                    <div class="form-group row">
                                        <label for="firstname"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>
                                        <div class="col-md-6">
                                            <input id="firstname" type="text"
                                                   class="form-control @error('firstname') is-invalid @enderror"
                                                   name="firstname" value="{{ old('firstname') }}" required
                                                   autocomplete="firstname" autofocus>
                                            @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
{{--NOM--}}
                                    <div class="form-group row">
                                        <label for="lastname"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                                        <div class="col-md-6">
                                            <input id="lastname" type="text"
                                                   class="form-control @error('lastname') is-invalid @enderror"
                                                   name="lastname" value="{{ old('lastname') }}" required
                                                   autocomplete="lastname" autofocus>
                                            @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
{{--AGE--}}
                                    <div class="form-group row">
                                        <label for="age"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
                                        <div class="col-md-6">
                                            <input id="age" type="number"
                                                   class="form-control @error('age') is-invalid @enderror"
                                                   name="age" value="{{ old('age') }}" required autocomplete="age"
                                                   autofocus>
                                            @error('age')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
{{--ADRESSE--}}
                                    <div class="form-group row">
                                        <label for="adresse"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>
                                        <div class="col-md-6">
                                            <input id="adresse" type="text"
                                                   class="form-control @error('adresse') is-invalid @enderror"
                                                   name="adresse" value="{{ old('adresse') }}" required
                                                   autocomplete="adresse" autofocus>
                                            @error('adresse')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
{{--CODE POSTAL--}}
                                    <div class="form-group row">
                                        <label for="code_postal"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Code postal') }}</label>
                                        <div class="col-md-6">
                                            <input id="code_postal" type="number"
                                                   class="form-control @error('code_postal') is-invalid @enderror"
                                                   name="code_postal" value="{{ old('code_postal') }}" required
                                                   autocomplete="code_postal" autofocus>
                                            @error('code_postal')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
{{--EMAIL--}}
                                    <div class="form-group row">
                                        <label for="email"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Addresse mail') }}</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" required
                                                   autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
{{--MOT DE PASSE--}}
                                    <div class="form-group row">
                                        <label for="password"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
{{--FIN PARTIE AUTHENTIFICATION--}}

{{-- ROLE = ADMIN : valeur 1 - COACH : valeur 2 - ELEVE : valeur 3--}}
                                    <div class="col-md-6" style="display: none">
                                        <select id="role_id" name="role">
                                            <option value="3"></option>
                                            <option value="2"></option>
                                            <option value="1"></option>
                                        </select>
                                    </div>
{{--VERIFICATION MOT DE PASSE--}}
                                        <div class="form-group row">
                                        <label for="password-confirm"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Confirmation mot de passe') }}</label>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                   name="password_confirmation" required
                                                   autocomplete="new-password">
                                        </div>
                                    </div>

{{--QUESTIONNAIRE SPORTS/NIVEAU ELEVES--}}
                                <div id="sports" class="text-center d-none">
                                    <br><p>Afin de vous proposez les évènements les mieux adaptés,</p>
                                    <p>merci d'indiquer votre niveau dans chacun des sports : </p><br>
{{-- MUSCULATION--}}
                                    <div class="form-group row">
                                        <label for="sportMusculation"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Sport') }} : MUSCULATION</label>
                                        <div class="col-md-6" style="display: none">
                                            <select id="sportMusculation"
                                                    class="form-control @error('sportMusculation') is-invalid @enderror"
                                                    name="sportMusculation">
                                                <option value="1" selected>Musculation</option>
                                            </select>
                                            @error('sportMusculation')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
{{-- Musculation : niveau --}}
                                        <label for="niveauSportMusculation"
                                               class="col-md-4 col-form-label text-md-right"></label>
                                        <div class="col-md-6">
                                            <select id="niveauSportMusculation"
                                                    class="form-control @error('niveauSportMusculation') is-invalid @enderror"
                                                    name="niveauSportMusculation">
                                                <option value="1" selected>Je débute</option>
                                                <option value="2">Je pratique ce sport regulièrement</option>
                                                <option value="3">Je pratique très bien ce sport</option>
                                            </select>
                                            @error('niveauSportMusculation')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
{{-- YOGA--}}
                                    <div class="form-group row">
                                        <label for="sportYoga"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Sport') }} : YOGA</label>
                                        <div class="col-md-6" style="display: none">
                                            <select id="sportYoga"
                                                    class="form-control @error('sportYoga') is-invalid @enderror"
                                                    name="sportYoga">
                                                <option value="2" selected>Yoga</option>
                                            </select>
                                            @error('sportYoga')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
{{-- Yoga : niveau --}}
                                        <label for="niveauSportYoga"
                                               class="col-md-4 col-form-label text-md-right"></label>
                                        <div class="col-md-6">
                                            <select id="niveauSportYoga"
                                                    class="form-control @error('niveauSportYoga') is-invalid @enderror"
                                                    name="niveauSportYoga">
                                                <option value="1" selected>Je débute</option>
                                                <option value="2">Je pratique ce sport regulièrement</option>
                                                <option value="3">Je pratique très bien ce sport</option>
                                            </select>
                                            @error('niveauSportYoga')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
{{-- RUNNING --}}
                                    <div class="form-group row">
                                        <label for="sportRunning"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Sport') }} : RUNNING</label>
                                        <div class="col-md-6" style="display: none">
                                            <select id="sportRunning"
                                                    class="form-control @error('sportRunning') is-invalid @enderror"
                                                    name="sportRunning">
                                                <option value="3" selected>Running</option>
                                            </select>
                                            @error('sportRunning')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
{{-- Running : niveau --}}
                                        <label for="niveauSportRunning"
                                               class="col-md-4 col-form-label text-md-right"></label>
                                        <div class="col-md-6">
                                            <select id="niveauSportRunning"
                                                    class="form-control @error('niveauSportRunning') is-invalid @enderror"
                                                    name="niveauSportRunning">
                                                <option value="1" selected>Je débute</option>
                                                <option value="2">Je pratique ce sport regulièrement</option>
                                                <option value="3">Je pratique très bien ce sport</option>
                                            </select>
                                            @error('niveauSportRunning')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
{{-- FITNESS --}}
                                    <div class="form-group row">
                                        <label for="sportFitness"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Sport') }} : FITNESS</label>
                                        <div class="col-md-6" style="display: none">
                                            <select id="sportFitness"
                                                    class="form-control @error('sportFitness') is-invalid @enderror"
                                                    name="sportFitness">
                                                <option value="4" selected>Fitness</option>
                                            </select>
                                            @error('sportFitness')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
{{-- Fitness : niveau --}}
                                        <label for="niveauSportFitness"
                                               class="col-md-4 col-form-label text-md-right"></label>
                                        <div class="col-md-6">
                                            <select id="niveauSportFitness"
                                                    class="form-control @error('niveauSportFitness') is-invalid @enderror"
                                                    name="niveauSportFitness">
                                                <option value="1" selected>Je débute</option>
                                                <option value="2">Je pratique ce sport regulièrement</option>
                                                <option value="3">Je pratique très bien ce sport</option>
                                            </select>
                                            @error('niveauSportFitness')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>

{{-- BOUTON ENREGISTRER --}}
                                <div class="form-group row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts-footer')
    <script>
        (function(){
            document.addEventListener('DOMContentLoaded', function(event){

                let coach = document.querySelector('#registerCoach');
                let member = document.querySelector('#registerMember');
                let form = document.querySelector('form');
                let sports = document.querySelector('#sports');

                coach.addEventListener('click', function(e){
                    e.preventDefault();
                    form.classList.remove('d-none');
                    sports.classList.add('d-none');

                    document.querySelector('#role_id').value = '2';

                    document.querySelector('#niveauSportMusculation').value ='3';
                    document.querySelector('#niveauSportYoga').value ='3';
                    document.querySelector('#niveauSportRunning').value ='3';
                    document.querySelector('#niveauSportFitness').value ='3';
                });

                member.addEventListener('click', function(e){
                    e.preventDefault();
                    form.classList.remove('d-none');
                    sports.classList.remove('d-none');
                });
            });
        })();
    </script>
@endsection
