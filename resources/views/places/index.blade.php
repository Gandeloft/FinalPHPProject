@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Place name</th>
      <th scope="col">Municipality name</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <a class="btn btn-primary float-right" href="/places/new">New</a>
  @foreach ($places as $place)
    <tr>
        <td><?= $place->id ?></td>
        <td><?= $place->place_name ?></td>
        <td><?= $place->municipality->municipality_name ?></td>
        <td><a href="/places/delete/{{ $place->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection