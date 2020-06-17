{{-- PAGE : mes-sessions{id} --}}
{{-- Informations de la session du user connecté --}}

                <div class="col-md-6" class="box" id="ici">
                    @foreach($session->messages as $message)
                        <p><b>{{ $message->from->firstname }} a dit :</b><br> {{ $message->message }}</p>
                    @endforeach
                </div>


