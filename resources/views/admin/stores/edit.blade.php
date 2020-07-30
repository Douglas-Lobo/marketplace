@extends('layouts.app')
@section('title', 'Atualizar Loja')
@section('content')

<form action="/admin/stores/update/{{$store->id}}" method="post">

    @csrf

  <div class="form-group">
    <label >Nome Loja</label>
    <input type="text" class="form-control" name='name' value='{{$store->name}}'>
  </div>

  <div class="form-group">
    <label >Descrição</label>
    <input type="text" class="form-control" name='description' value='{{$store->description}}'>
  </div>

  <div class="form-group">
    <label >Telefone</label>
    <input type="text" class="form-control" name='phone' value='{{$store->phone}}'>
  </div>

  <div class="form-group">
    <label >Whats</label>
    <input type="text" class="form-control" name='mobile_phone' value='{{$store->mobile_phone}}'>
  </div>

  <div class="form-group">
    <label >Slug</label>
    <input type="text" class="form-control" name='slug' value='{{$store->slug}}'>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
