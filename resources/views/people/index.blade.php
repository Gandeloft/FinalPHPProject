@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Place name</th>
      <th scope="col">OIB</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <a class="btn btn-primary float-right" href="/people/new">New</a>
  @foreach ($people as $person)
    <tr>
        <td><?= $person->id ?></td>
        <td><?= $person->firstName ?></td>
        <td><?= $person->lastName ?></td>
        <td><?= $person->place->place_name ?></td>
        <td><?= $person->oib ?></td>
        <td><a href="/people/delete/{{ $person->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection