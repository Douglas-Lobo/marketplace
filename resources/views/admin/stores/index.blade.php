
@extends('layouts.app')
@section('title', 'Lojas')
@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Loja</th>
      <th scope="col">Description</th>
      <th scope="col">Phone</th>
      <th scope="col">Mobile Phone</th>
      <th scope="col">Açôes</th>
    </tr>
  </thead>
  <tbody>
    @foreach($stores as $store)
        <tr>
        <th scope="row">{{ $store->id }}</th>
        <td>{{ $store->name }}</td>
        <td>{{ $store->description }}</td>
        <td>{{ $store->phone }}</td>
        <td>{{ $store->mobile_phone }}</td>
        <td><button type="button" class="btn btn-primary">Primary</button> <br> <button type="button" class="btn btn-primary">Primary</button></td>
        </tr>
    @endforeach
  </tbody>
</table>



{{$stores->links()}}


@endsection