@extends('layouts.app')

@section('title', 'Create movie')

@section('content')
<form method="POST" action="/movies">
    @csrf

    <input name="title" placeholder="Title" />
    <br/><br/>
    <input name="genre" placeholder="Genre" />
    <br/><br/>
    <input name="director" placeholder="Director" />
    <br/><br/>
    <input name="year_of_release" placeholder="Year" />
    <br/><br/>
    <textarea name="storyline" placeholder="Storyline"></textarea>
    <br/><br/>
    <button type="submit">Create a movie</button>
</form>
@endsection