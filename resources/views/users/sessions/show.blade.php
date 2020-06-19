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
                    <div class="col-md-6 d-flex d-flex justify-content-start boxWrite">
                        <label for="message"></label>
                        <textarea name="message" cols="50" rows="2" required placeholder="votre message..."></textarea>
                        <button class="btnTchat">Envoyer</button>
                    </div>
                    <div>{{--récup le numéro de la session--}}
                        <label for="session"></label>
                        <input type="hidden" name="session" id="session" value="{{$session->id}}"/>
                    </div>

                </form>

                <div class="col-md-6 mt-2" id="messages">
                    @foreach($session->messages as $message)
                        <p><b>{{ $message->from->firstname }} a écrit :</b> {{ $message->message }}</p>
                    @endforeach

                </div>
            </div>

        </div>
    </div>

@endsection
@section('scripts-footer')
    {{--Actualiser la box du tchat--}}
    <script>
        (function(){
           document.addEventListener('DOMContentLoaded', function(e){
               let sessionId = {{$session->id}};
               let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

               let myInit = {
                method : 'POST',
                headers : {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                }
               };

              setInterval(function(){
                  fetch('/getMessages/'+sessionId, myInit)
                      .then(function(response){
                          if(response.ok){
                              return response.json();
                          }else{
                              console.log('Erreur');
                          }
                      })
                      .then(function(data){
                          console.log(data);
                          let messages = document.querySelectorAll('#messages p');
                          for (let message of messages) {
                              message.remove();
                          }
                          let chat = document.querySelector('#messages');
                          for (let message of data) {
                              console.log(message);
                              chat.insertAdjacentHTML('beforeend',  '<p><b>' + message.from.firstname + ' a écrit : </b>' + message.message + '</p>')
                          }
                      });
              }, 2500);
           });
        })()
    </script>
@endsection
