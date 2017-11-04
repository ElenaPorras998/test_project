@extends('wrapper')

@section('content')
<h1>{{$movie->title}}</h1>
<a href="{{route('movie edit', ['id' => $movie->id])}}"><button>Edit</button></a>

<section>
    <h2>Author</h2>
    <p>{{$author->name}} ({{$author->year_of_birth}})</p>
    <h2>Published at</h2>
    <p>{{$movie->published_at}}</p>
    <h2>Finished reading at</h2>
    <p>{{$movie->finished_reading_at}}</p>
    <h2>My review</h2>
    <p>{{$movie->my_review}}</p>
    <h2>My rating</h2>
    <p>{{$movie->my_rating}}</p>
</section>

@endsection