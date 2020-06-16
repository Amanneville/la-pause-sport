@extends('layouts.app')
@section('content')

    @foreach($user->sessions as $session)
        Session du :  <a href="/mes-sessions/{{$session->id}}">{{ $session->date }}</a>
    @endforeach

@endsection
