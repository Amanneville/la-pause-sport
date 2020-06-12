@extends('layouts.master')
@section('content')
<div>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque fugit inventore magnam quae rerum sit voluptatibus. Architecto debitis dolorum, enim est fugit hic illum libero nobis perferendis quas repellat.
    </p>


        @foreach($sessions as $session)
            <tr>
                <th scope="row">{{ $session->id }}</th>
                <td>{{$session->ville }}</td>
            </tr>
        @endforeach
</div>
@endsection
