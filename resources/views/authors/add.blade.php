@extends('wrapper')

@section('content')
<form action="" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="full_name_input">Full name:</label><br>
        <input class="form-control" type="text" name="full_name" value="" id="full_name_input">
    </div>

    <div class="form-group">
        <label for="year_of_birth_input">Year of birth:</label><br>
        <input class="form-control" type="text" name="year_of_birth" value="" id="year_of_birth_input">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="save">
    </div>
</form>
@endsection