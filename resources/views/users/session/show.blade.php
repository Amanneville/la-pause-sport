{{-- PAGE : mes-sessions{id} --}}
{{-- TCHAT de la session du user connecté --}}

@extends('layouts.app')
@section('content')
    <body class="back1">
    <section class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">

                <div class="card animate__animated animate__backInDown" style="width:60%">

                    <div class="card-header">
                        <h4>Discutez entre participants !</h4>
                    </div>

                    <div class="container mt-5">
                        <div class="row">
                             <div class="col-md-12">
                                <h4>Session {{ $session->sports->name }} du {{ date('d-m-Y', strtotime($session->date)) }} à {{ date('h', strtotime($session->heure_debut)) }} h {{ date('m', strtotime($session->heure_debut)) }} !</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 justify-content-center mt-2">
                                <p>Profitez du tchat de votre session pour vous organiser entre participants, mais aussi posez toutes vos questions au coach !</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 justify-content-center mt-5">
                                <form action="" method="post" id="formMessage" class="ml-5">
                                    @csrf
                                    <div class="d-flex justify-content-start">
                                        <label for="message"></label>
                                        <textarea name="message" cols="50" rows="1" required placeholder="votre message..."></textarea>
                                        <button class="btnViolet">Envoyer</button>
                                    </div>
                                    <div>{{--récup le numéro de la session--}}
                                        <label for="session"></label>
                                        <input type="hidden" name="session" id="session" value="{{$session->id}}"/>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 justify-content-center ml-5 mt-2 mb-5" id="boxmessages">
                                @foreach($session->messages as $message)
                                    <p><b>{{ $message->from->firstname }} a écrit :</b> {{ $message->message }}</p>
                                @endforeach
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
    </body>
