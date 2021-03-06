<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery.min.js" defer></script>

    <script src="{{ asset('js/meteo.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/boostrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-2.2.3.js') }}" type="text/javascript"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- fullcalendar -->

    <link href='{{asset('css/fullcalendar/core/main.css')}}' rel='stylesheet' />
    <link href='{{asset('css/fullcalendar/daygrid/main.css')}}' rel='stylesheet' />

    <script src='{{asset('js/fullcalendar/core/main.js')}}'></script>
    <script src='{{asset('js/fullcalendar/daygrid/main.js')}}'></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid' ]
            });

            calendar.render();
        });

    </script>



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <img src="/uploads/femmesport.png" style="width:50px; height:50px; float:left; border-radius:50%;">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="mr-5 ml-5"><a class="blacklink" href="{{ url('/home') }}">Acceuil</a></li>
                        <li class="mr-3 ml-5"><a class="greenlink" href="{{ url('/musculation') }}">Musculation</a></li>
                        <li class="mr-3"><a class="greenlink" href="{{ url('/yoga') }}">Yoga</a></li>
                        <li class="mr-3"><a class="greenlink" href="{{ url('/running') }}">Running</a></li>
                        <li class="mr-3"><a class="greenlink" href="{{ url('/fitness') }}">Fitness</a></li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item ">
                                <a class="nav-link " href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>

                            @endif
                        @else
                            <li class="dropdown">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:-7px; left:10px; border-radius:50%">
                                    {{ Auth::user()->lastname }} <span class="caret"></span>
                                    {{ Auth::user()->firstname }} <span class="caret"></span>
                                </a>
                                <img class="animate__animated animate__hinge" src="/uploads/basquettes.png" style="width:50px; height:50px; position:absolute; top: 2px; left:200px;">

                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Se deconnecter</a></li>
                                </ul>

                            </li>

                        <!--

                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>          -->
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
