
@extends('layouts.app')
@section('title', 'Lojas')
@section('content')

<a href=" {{ route('admin.stores.create') }} " class="btn btn-sm btn-primary">Criar loja</a>
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
        <td> 
          <a href="{{route('admin.stores.edit', ['store_id' => $store->id])}}" class="btn bt-sm btn-warning">EDITAR</a> 
          <a href="{{route('admin.stores.destroy', ['store_id' => $store->id])}}" class="btn bt-sm btn-danger">REMOVER</a> 
        </td>
        </tr>
    @endforeach
  </tbody>
</table>



{{$stores->links()}}


@endsection