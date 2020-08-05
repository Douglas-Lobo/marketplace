
@extends('layouts.app')
@section('title', 'Lojas')
@section('content')

@if(!$store)
<a href=" {{ route('admin.stores.create') }} " class="btn btn-sm btn-primary">Criar loja</a>
@endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Loja</th>
      <th scope="col">Description</th>
      <th scope="col">Phone</th>
      <th scope="col">Mobile Phone</th>
      <th scope="col">Qtd produtos</th>
      <th scope="col">Açôes</th>
    </tr>
  </thead>
  <tbody>
      <tr>
      <th scope="row">{{ $store->id }}</th>
      <td>{{ $store->name }}</td>
      <td>{{ $store->description }}</td>
      <td>{{ $store->phone }}</td>
      <td>{{ $store->mobile_phone }}</td>
      <td>{{ $store->products->count()}}</td>
      <td> 
        <a href="{{route('admin.stores.edit', ['store_id' => $store->id])}}" class="btn bt-sm btn-warning">EDITAR</a> 
        <a href="{{route('admin.stores.destroy', ['store_id' => $store->id])}}" class="btn bt-sm btn-danger">REMOVER</a> 
      </td>
      </tr>
  </tbody>
</table>


@endsection