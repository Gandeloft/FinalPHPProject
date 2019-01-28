@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">City name</th>
      <th scope="col">Country name</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <a class="btn btn-primary float-right" href="/cities/new">New</a>
  @foreach ($cities as $city)
    <tr>
        <td><?= $city->id ?></td>
        <td><?= $city->city_name ?></td>
        <td><?= $city->country->country_name ?></td>
        <td><a href="/cities/delete/{{ $city->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection