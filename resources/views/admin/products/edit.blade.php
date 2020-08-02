@extends('layouts.app')
@section('title', 'Atualizar Loja')
@section('content')

<form action="{{ route('admin.products.update',['product' => $product->id]) }}" method="post">

    @csrf

    @method('PUT')

  <div class="form-group">
    <label >Nome produto</label>
    <input type="text" class="form-control" name='name' value='{{$product->name}}'>
  </div>

  <div class="form-group">
    <label >Description</label>
    <input type="text" class="form-control" name='description' value='{{$product->description}}'>
  </div>

  <div class="form-group">
    <label >Preço</label>
    <input type="text" class="form-control" name='price' value='{{$product->price}}'>
  </div>

  <div class="form-group">
    <label >Conteudo</label>
    <textarea type="text" class="form-control" name='body'>{{$product->body}}</textarea>
  </div>
  
  <div class="form-group">
    <label >Slug</label>
    <input type="text" class="form-control" name='slug' value='{{$product->slug}}'>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
