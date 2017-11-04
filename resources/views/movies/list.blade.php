@extends('wrapper')

@section('style')
<link rel="stylesheet" href="/css/list.css">
@endsection

@section ('title')
Book | List
@endsection

@section ('books')
active
@endsection

@section('content')
<section id="main">
    <div class="content">
        <h1>List of books</h1>

        <ul id="list">
            @foreach($movies as $movie)
                <li>
                    <a href="{{route('movie detail', ['id' => $movie->id])}}">
                        {{$movie->title}} ({{$movie->published_at}})
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection