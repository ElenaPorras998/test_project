@extends('wrapper')

@section('style')
<link rel="stylesheet" href="/css/home.css">
@endsection

@section ('title')
Home
@endsection

@section('content')

<section id="main">

<h1>My Library</h1>

<div id="navi">
    <div id="lists" class="sep">
        <div class="option">Lists</div>
        <a href="{{action('movieController@listing')}}"><div id="books" class="second hidden">Book list</div></a>
        <a href="{{action('authorController@listing')}}"><div id="authors" class="second hidden">Author list</div></a>
    </div>
    <div id="add" class="sep">
        <div class="option">Add</div>
        <a href="{{route('add movie')}}"><div id="book" class="second hidden">Add book</div></a>
        <a href="{{route('add author')}}"><div id="author" class="second hidden">Add author</div></a>
    </div>
</div>

</section>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>
    $('div#lists').hover(function(){
        $('div#books').toggleClass('hidden');
        $('div#authors').toggleClass('hidden');        
    });

    $('div#add').hover(function(){
        $('div#book').toggleClass('hidden');
        $('div#author').toggleClass('hidden');        
    });

    $('nav').hide();
</script>

@endsection