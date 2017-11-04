@extends('wrapper')

@section ('title')
Author
@endsection

@section('content')
<form action="" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="full_name_input">Full name:</label><br>
        <input class="form-control" data-validate="name" type="text" name="name" value="{{$author->name}}" id="full_name_input">
    </div>

    <div class="form-group">
        <label for="year_of_birth_input">Year of birth:</label><br>
        <input class="form-control" data-validate="year" type="text" name="year_of_birth" value="{{$author->year_of_birth}}" id="year_of_birth_input">
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