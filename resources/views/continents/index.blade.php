@extends('layouts.app')

@section('content')

<table class="table">
<a class="btn btn-primary float-right" href="/continents/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Native name</th>
      <th scope="col">Number of countries</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($continents as $continent)
    <tr>
      <td><?= $continent->id ?></td>
      <td><?= $continent->continent_name ?></td>
      <td><?= $continent->native_name ?></td>
      <td><?= $continent->number_of_countries ?></td>
      <td><a href="/continents/delete/{{ $continent->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection