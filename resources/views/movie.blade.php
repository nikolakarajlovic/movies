@extends('layouts.app')

@section('title')
Movie
@endsection
@section('content')
        <h1>{{$movie->title}}</h1>
        <h2>{{$movie->year_of_release}}. by {{$movie->director}}.</h2>

            <p>
            A great {{$movie->genre}} movie. <br>
            {{$movie->storyline}}
            </p>
 @endsection