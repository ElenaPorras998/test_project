@extends('wrapper')

@section('content')
<form action="" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title_input">Title:</label><br>
        <input class="form-control" data-validate="name" type="text" name="title" value="{{$movie->title}}" id="title_input">
    </div>
    
    <div class="form-group">
        <label for="author_select">Author:</label><br>
        <select name="authors" id="author_select">
        @foreach($authors as $author)
            <option value="{{$author->id}}">{{$author->name}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="published_input">Published at:</label><br>
        <input class="form-control" data-validate="year" type="text" name="published_at" value="{{$movie->published_at}}" id="published_input">
    </div>

    <div class="form-group">
        <label for="finished_input">Finished reading at:</label><br>
        <input class="form-control" type="text" name="finished_reading_at" value="{{$movie->finished_reading_at}}" id="finished_input">
    </div>

    <div class="form-group">
        <label for="review_input">My review:</label><br>
        <textarea name="my_review" id="review_input" cols="30" rows="10">{{$movie->my_review}}</textarea>
    </div>

    <div class="form-group">
        <label for="rating_input">Rating:</label><br>
        <input class="form-control" type="text" name="my_rating" value="{{$movie->my_rating}}" id="rating_input">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="save">
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="/Js/validation.js"></script>
<script>
    var form = $('form');
    var validator = new Validator($('form'));
</script>
@endsection