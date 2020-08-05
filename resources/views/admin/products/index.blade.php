
@extends('layouts.app')
@section('title', 'Lojas')
@section('content')

<a href=" {{ route('admin.products.create') }} " class="btn btn-sm btn-primary">Criar Produto</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Loja</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
        <tr>
        <th scope="row">{{ $product->id }}</th>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->store->name }}</td>
        <td> 

          <div class="btn-group">
            <a href="{{route('admin.products.edit', ['product' => $product->id])}}" class="btn bt-sm btn-warning">EDITAR</a> 
            <form action="{{route('admin.products.destroy', ['product' => $product->id])}}" method='POST'>
                @csrf
                @method('delete')
                
                <button type='submit' class="btn bt-sm btn-danger">REMOVER</button>
              
            </form>
          </div>
       
        </td>
        </tr>
    @endforeach
  </tbody>
</table>



{{$products->links()}}


@endsection