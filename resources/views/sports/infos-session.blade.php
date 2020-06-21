{{-- PAGE : mes-sessions{id} --}}
{{-- Informations d'une session --}}

@extends('layouts.app')
@section('content')



    <div class="container mt-5">
        <div class="row">

            <div>
                <input type="hidden" id="code_postal_user" value="{{ Auth::user()->code_postal }}"/>
                <input type="button" value="APPEL API METEO" onclick="buttonClickGET()"/>
                <p>Temperature d'aujourd'hui dans votre ville est de: <span id="zone_meteo" class="mb-5"> </span> </p>

            </div>

            <div class="col-md-12">
                <h4>Informations Session <b>{{ $sessions->sports->name }} !</b></h4><br>
                {{-- Affiche le sport de la session --}}
               <p> Le(la) coach <b>{{ ($sessions->coach->firstname) }}</b> vous propose une session prévue pour le <b>{{ date('d-m-Y', strtotime($sessions->date)) }}</b>, ne tardez pas à vous inscrire !</p>
            </div>
        </div>


            <div class="row">
                <div class="col-md-6 mt-3">
                    <h5><b>Informations nécessaires :</b></h5>
                </div>
                <div class="col-md-6 mt-3">
                    <p><b>Le mot du coach :</b></p>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li>N° référence : {{ $sessions->id }}</li>
                        <li>Heure de début : <b>{{ date('h', strtotime($sessions->heure_debut)) }} h {{ date('m', strtotime($sessions->heure_debut)) }}</b> soyez à l'heure !</li>
                        <li>Heure de fin :      {{ date('h', strtotime($sessions->heure_fin)) }} h {{ date('m', strtotime($sessions->heure_fin)) }}, environ !</li>
                        <li>Session : <b>{{ $sessions->titre }}</b></li>
                        <li>Adresse : {{ $sessions->adresse }} à {{ $sessions->ville }} ({{ $sessions->code_postal }})</li>
                        <li>Prix par participants: {{ $sessions->prix }} €</li>
                    </ul>
            </div>
                <div class="col-md-6">
                    <p>{{ ($sessions->infos) }}</p>
                </div>

            </div>

        <div class="row">
            <div class="col-md-6 mt-2">
                <h5><b>Informations importantes :</b></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol>
                    <li>Le niveau requis pour cette session n'est peut-être pas adapté à votre profil !</li>
                        <p><b>{{ ($sessions->coach->firstname) }}</b> recommande un niveau : {{ $sessions->niveau }}*</p>
                    <li>Pour des questions de sécurité, Le nombre <b>maximal</b> de participants à cette session est de <b>{{ $sessions->nb_max_participants }}</b>.</li>
                        <p><b>Inscrivez-vous avant qu'il n'y est plus de place !</b></p>
                    <li>Une fois, inscrit(e) vous aurez un accès permanent à ses informations mais vous pourrez aussi : </li>
                </ol>
                    <lu>
                        <li>Consulter la liste des participants</li>
                        <li>Accèder au forum pour échanger avec les participants et avec notre coach {{ ($sessions->coach->firstname) }} !</li>
                    </lu>


            </div>
        </div>

        {{-- BOUTON D'INSCRIPTION ACTIF SI NON INSCRIT--}}

    @if(Auth::user()->roles->keyBy('id')->has(3) === true )

            @if (Auth::user()->sessions->keyBy('id')->has($sessions->id) === false )
                <div class="row mt-3">
                    <div class="col-md-4">

                        <form action="{{ route('inscription-session.create') }}" method="get">
                            @csrf
                  <span>
                    <button class="btnViolet">Inscription !</button>
                    <input type="hidden" name="session_id" value="{{ $sessions->id }}"/>
                  </span>
                        </form>
                    </div>
                </div>
            @else

        {{-- BOUTON DE DESINSCRIPTION ACTIF SI INSCRIT--}}

        <div class="row mt-3">
            <div class="col-md-6">
                <form action="{{ route('desinscription.update', $sessions->id) }}" method="post">
                    @csrf
                    @method('PUT')
                  <span>
                      <button class="btn btn-danger" >se désinscrire </button>
                  </span>
                </form>
            </div>

            {{-- BOUTON DU CHAT ACTIF SI INSCRIT--}}

            <div class="col-md-6">
                <a href="/mes-sessions/{{$sessions->id}}" class="btn btn-info"> Accèder au chat</a>
            </div>

        </div>


            @endif
    @endif

@endsection

@section('scripts-footer')
    <script>

var callBackSucess = function(data) {
    console.log("donnes api", data)

    var element = document.getElementById("zone_meteo");
     element.textContent = "";
     element.insertAdjacentHTML('beforeend', '<b>' + data.main.temp.toFixed(2) + 'C°</b>');


}

function buttonClickGET(){
    var codePostalUser = document.getElementById("code_postal_user").value;

    var url = "https://api.openweathermap.org/data/2.5/weather?zip="+codePostalUser+",fr&appid=f0ee7cd8f45c9cdcafd9dffea5bb05d3&units=metric"

    $.get(url, callBackSucess).done(function() {

        //alert ("second sucess" );
    })
        .fail(function() {
            alert("error");
        })
        .always(function(){
            //alert( "finished" );
        })
            }
            </script>
    @endsection
