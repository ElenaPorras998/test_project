@extends('wrapper')

@section('content')
<h1>List of the authors</h1>

<input type="text" id="search">
<button id="btn">Search!</button>

<ul>
    @foreach($authors as $author)
        <li>
            <a href="{{route('author edit', ['id' => $author->id])}}">
                {{$author->name}} ({{$author->year_of_birth}})
            </a>
        </li>
    @endforeach
</ul>

@endsection