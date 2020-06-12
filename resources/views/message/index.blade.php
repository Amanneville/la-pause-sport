<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tchat Session</title>

    {{--  BOOTSTRAP  --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

<style>
    #chatBox {
        text-align:left;
        /*margin:0 auto;*/
        /*margin-bottom:25px;*/
        padding:10px;
        background:#fff;
        height:270px;
        width:430px;
        border:1px solid #ACD8F0;
        overflow:auto; }

</style>



<body>

<h3>Tchat Session Sport</h3>
<div class="container-fluid">

    <div class="row" id="menu">
        <div class="col-md-6">
            <p>Bienvenue NOM USER</p>
            <p class="logout"><a id="Quiter le chat" href="#">Exit Chat</a></p>
        </div>
    </div>

    <div id="chatBox"></div>

    <form name="message" action="">
        <input name="msgUser" type="text" id="msgUser" size="63" placeholder="votre message ici"/>
        <input name="btnMsg" type="submit"  id="btnMsg" value="Envoyer" />
    </form>

</div>

<br>
<h3>Table des messages</h3>
    <table>
        <thead>
        <tr class="table table-dark">
            <td>Session_id</td>
            <td>#</td>
            <td>from</td>
            <td>to</td>
            <td>message</td>
            <td>read</td>
            <td>date msg</td>

        </tr>
        </thead>
 @foreach($messages as $message)
            <tr>
                <td>{{ $message->session_id }}</td>
                <td>{{ $message->id }}</td>
                <td>{{ $message->from }}</td>
                <td>{{ $message->to }}</td>
                <td>{{ $message->message }}</td>
                <td>{{ $message->is_read }}</td>
                <td>{{ $message->created_at }}</td>
            </tr>
    @endforeach
    </table>


{{-- AJAX--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    // Appel document
    $(document).ready(function(){

    });
</script>


</body>
</html>
