@extends('wrapper')

@section('style')
<link rel="stylesheet" href="/css/list.css">
@endsection

@section ('title')
Movie | Detail
@endsection

@section('content')
<section id="main">
    <div class="content">
        <h1>{{$movie->title}}</h1>
        <a href="{{route('movie edit', ['id' => $movie->id])}}"><button id="edit" class="btn">Edit</button></a>
        <div id="form">
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
        </div>
    </div>
</section>

@endsection