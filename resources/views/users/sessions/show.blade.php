{{-- PAGE : mes-sessions{id} --}}
{{-- Informations de la session du user connecté --}}

@extends('layouts.app')
@section('content')



    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h5>Informations de votre session :</h5>
                {{-- Affiche le sport de la session --}}
                <h6>Session : <b>{{ $session->sports->name }}</b></h6>

                <p>Session du {{ $session->date }}</p>
                <p>infos de la table sessions/session...</p>

                {{--Personne qui a créé la session : session->coach--}}
                <p> Le(la) coach de cette session est : <b>{{ ($session->coach->firstname) }}</b></p>

                {{--utilisateur dans la session : session->users (attention sans le coach)--}}
                <p>La liste des participants inscrits à cette session :</p>
                {{--{{$session->users}}--}}
                {{--{{dd($session->users->lastname)}}--}}
                @foreach($session->users as $user)
                    <ul>
                        <li>{{ $user->firstname }}  {{ $user->lastname }} {{ $user->age }} ans </li>
                    </ul>
                @endforeach

            </div>

            <div class="col-md-6">
                <h3>Discutez entre participants :</h3>
                {{--    Messages //session->messages--}}
                <form action="" method="post" id="formMessage">
                    @csrf
                    <div>
                        <label for="message"></label>
                        <textarea name="message" cols="50" rows="1" required placeholder="votre message..."></textarea>
                    </div>
                    <div>{{--récup le numéro de la session--}}
                        <label for="session"></label>
                        <input type="hidden" name="session" id="session" value="{{$session->id}}"/>
                    </div>
                    <div class="col-md-4">
                        <button>Envoyer</button>
                    </div>
                </form>


                <div class="col-md-6" class="box" id="here">

                    @foreach($session->messages as $message)
                        <p><b>{{ $message->from->firstname }} a écrit :</b><br> {{ $message->message }}</p>
                    @endforeach

                </div>
            </div>

        </div>

        {{--INSERER UN BOUTON D'INSCRIPTION--}}

        <form action="{{ route('inscription.create') }}" method="get">

                    <button class="btn-info"> inscription </button>
                    <input type="hidden" name="session_id" value="{{ $session->id }}"/>

        </form>


    </div>



    {{--Actualiser la box du tchat--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        {{--var url = 'tchat/{{$session->id}}'--}}
        {{--$("#here").load("url #ici");--}}
        setInterval('load_messages()', 500)
        function load_messages() {
            $("#here").load(" #here")
        }
    </script>

@endsection
