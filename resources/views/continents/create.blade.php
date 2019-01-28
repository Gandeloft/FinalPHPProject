@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/continents">
@csrf

<div class="form-group">
    <input class="form-control" name="continent_name" type="text" placeholder="Continent name">
</div>
<div class="form-group">
    <input class="form-control" name="native_name" type="text" placeholder="Continent native name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection