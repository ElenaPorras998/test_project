@extends('wrapper')

@section ('title')
Book | List
@endsection

@section ('books')
active
@endsection

@section('content')
<h1>List of books</h1>

<input type="text" id="search">
<button id="btn">Search!</button>

<ul>
    @foreach($movies as $movie)
        <li>
            <a href="{{route('movie edit', ['id' => $movie->id])}}">
                {{$movie->title}} ({{$movie->published_at}})
            </a>
        </li>
    @endforeach
</ul>

@endsection