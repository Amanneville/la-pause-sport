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
    <script src="{{ asset('js/boostrap.js') }}" defer></script>
    <script src="{{ asset('js/jquery-2.2.3.js') }}" defer></script>
    <script src="{{ asset('js/materialize.js') }}" defer></script>
    <script src="{{ asset('js/mdb.js') }}" defer></script>
    <script src="{{ asset('js/tether.js') }}" defer></script>
    <script src="{{ asset('js/wow.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/mdb.scss') }}" rel="stylesheet">

    <!-- actualisation de la page -->
    <meta http-equiv="Refresh" content="20">
</head>
<body>
<style>
    #chatbox {
        text-align:left;
        margin:0 auto;
        margin-bottom:25px;
        padding:10px;
        background:#fff;
        height:270px;
        width:500px;
        border:1px solid #ACD8F0;
        overflow:auto; }
    li{
        list-style-type: none;
    }
    .dateMsg{
        font-size: 10px;
    }
</style>

<section>

    <div id="chatBox">

        @foreach($messages as $message)
            <ul>

                <li><b>{{ $message->firstname }}</b> a écrit :  {{ $message->message }}</li>
                <li >{{ 'le '. $message->created_at->format('d/m/Y') . ' à '. $message->created_at ->format('H:i')}}</li>

                {{--            $user->firstname--}}
            </ul>
        @endforeach
    </div>

</section>
</body>
</html>


