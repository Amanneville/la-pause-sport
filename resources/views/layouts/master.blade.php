<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La pause sport</title>

{{--  BOOTSTRAP  --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('scripts-header')
</head>
<body>

<h3 class="text-primary">LA PAUSE SPORT = PAGE MASTER</h3>
{{--<p>Bienvenue <b>{{ $prenom }}</b> ! </p>--}}

<div id="contenu">
    @yield('content')
</div>

@yield('scripts-footer')
<h3>FOOTER DE PAGE MASTER</h3>

</body>
</html>
