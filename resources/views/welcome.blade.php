@extends('app')

@section('content')
        <h1>Latest Movies - exemplu - {{$latestMovie}}</h1>
        <ul>
        @foreach($ab as $key=> $movie)
            <li class="list-group-item"><h5> {{$key}} => {{ $movie }}</h5></li>
        @endforeach
        </ul>
@endsection
