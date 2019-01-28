@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/people">
@csrf

<div class="form-group">
    <input class="form-control" name="firstName" type="text" placeholder="First name">
</div>
<div class="form-group">
    <input class="form-control" name="lastName" type="text" placeholder="Last name">
</div>
<div class="form-group">
    <input class="form-control" name="oib" type="text" placeholder="OIB">
</div>
<div class="form-group">
    <select class="form-control" name="place_id"> 
        @foreach($places as $place)
        <option value="{{ $place->id }}">{{ $place->place }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection