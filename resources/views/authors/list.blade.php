@extends('wrapper')

@section('style')
<link rel="stylesheet" href="/css/list.css">
@endsection

@section ('title')
Author | List
@endsection

@section ('authors')
active
@endsection

@section('content')
<section id="main">
    <div class="content">
        <h1>List of authors</h1>

        <ul id="list">
            @foreach($authors as $author)
                <li>
                    <a href="{{route('author edit', ['id' => $author->id])}}">
                        {{$author->name}} ({{$author->year_of_birth}})
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection