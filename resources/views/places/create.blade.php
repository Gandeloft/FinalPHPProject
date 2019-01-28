@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/places">
@csrf

<div class="form-group">
    <input class="form-control" name="place_name" type="text" placeholder="Place name">
</div>
<div class="form-group">
    <select class="form-control" name="municipality_id">
        @foreach($municipalities as $municipality)
        <option value="{{ $municipality->id }}">{{ $municipality->municipality_name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection