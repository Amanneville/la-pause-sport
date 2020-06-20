
@extends('layouts.app')

@section('content')

    <div class="container animate__animated animate__fadeInDown back2 text-white">
        <div class="row">
            <div class="col-md-12">
                <h3>Bienvenue sur votre espace personnel</h3>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">

                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->name }} modification photo de profil</h2>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Mettre à jour votre image de profil</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>
        </div>
        <br>
        <br>




        <div class="container">
            <div class="row ">

                <div class="col-md-6"> {{--informations personnelles user--}}
                    <h1>Vos informations :</h1><br>
                    <ul>
                        <li><h2>Prénom : </h2>{{ $user->firstname }}</li>
                        <li><h2>Nom : </h2> {{ $user->lastname }}</li>
                        <li><h2>Adresse : </h2>{{ $user->adresse }} ({{ $user->code_postal }})</li><br>
                        <li><h2>Votre adresse mail :</h2>{{ $user->email }}</li><br>
                        <li><h2>Âge : </h2>{{ $user->age }} ans.</li>
                    </ul>

                    <div class="text-center"><img src="{{ $user->avatar }}" alt="" height="100px"></div><br>
                    <div class="text-center"><button>Modifier vos informations</button></div>
                </div>

                <div class="col-md-6"> {{--liste et liens des sessions--}}
                    <h1>* Vous êtes inscrit aux sessions suivantes :</h1>
                    <h5><em>cliquez sur la date pour consulter les informations de la session et accéder au tchat !</em></h5><br>

                    @foreach($user->sessions as $session)
                        <ul>
                            <li><a href="/mes-sessions/{{$session->id}}">{{ $session->date }}</a></li>
                        </ul>
                    @endforeach
                </div>

            </div>
            <br>
            <br>


        </div>
    </div>
    <div class="container-fluid text-white">
        <div class="row bg-dark align-content-center">
            <div class="col-md-8 ml-5 mr-2  mb-5 text-center">
                <br>
                <h1>Calendrier</h1>
                <div id='calendar'></div>
            </div>

        </div>
    </div>

@endsection

@section('extra-script-footer')

    <script>
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        $.ajaxSetup({
            headers: {
                'X_CSRF_TOKEN': token
            }
        });

        let calendar = $('#calendar').fullCalendar({
            editable: true,
            events: "/fullcalendareventmaster",
            displayEventTime: true,
            editable: true,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },

            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: SITEURL + "/fullcalendareventmaster/create",
                        data: 'title=' + title + '&start=' + start + '&end=' + end,
                        type: "POST",
                        success: function (data) {
                            displayMessage("Added Successfully");
                        }
                    });
                    calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                        true
                    );
                }
                calendar.fullCalendar('unselect');
            },
            eventDrop: function (event, delta) {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                $.ajax({
                    url: SITEURL + '/fullcalendareventmaster/update',
                    data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                    type: "POST",
                    success: function (response) {
                        displayMessage("Updated Successfully");
                    }
                });
            },
            eventClick: function (event) {
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: SITEURL + '/fullcalendareventmaster/delete',
                        data: "&id=" + event.id,
                        success: function (response) {
                            if(parseInt(response) > 0) {
                                $('#calendar').fullCalendar('removeEvents', event.id);
                                displayMessage("Deleted Successfully");
                            }
                        }
                    });
                }
            }
        });


        function displayMessage(message) {
            $(".response").html("
            "+message+"
            ");
            setInterval(function() { $(".success").fadeOut(); }, 1000);
        }
    </script>
    @endsection
