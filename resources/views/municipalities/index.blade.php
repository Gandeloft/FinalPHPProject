@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Municipality name</th>
      <th scope="col">City name</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <a class="btn btn-primary float-right" href="/municipalities/new">New</a>
  @foreach ($municipalities as $municipality)
    <tr>
        <td><?= $municipality->id ?></td>
        <td><?= $municipality->municipality_name ?></td>
        <td><?= $municipality->city->city_name ?></td>
        <td><a href="/municipalities/delete/{{ $municipality->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection