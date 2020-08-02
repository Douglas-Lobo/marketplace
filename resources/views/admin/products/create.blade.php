@extends('layouts.app')

@section('content')
<h1>Criar produto</h1>
<form action="{{ route('admin.products.store') }}" method="post">

    @csrf

  <div class="form-group">
    <label >Nome produto</label>
    <input type="text" class="form-control" name='name'>
  </div>

  <div class="form-group">
    <label >Descrição</label>
    <input type="text" class="form-control" name='description'>
  </div>

  <div class="form-group">
    <label >Conteudo</label>
    <textarea type="text" class="form-control" name='body'></textarea>
  </div>

  <div class="form-group">
    <label >Preço</label>
    <input type="text" class="form-control" name='price'>
  </div>

  <div class="form-group">
    <label >Slug</label>
    <input type="text" class="form-control" name='slug'>
  </div>

  <div class="form-group">
    <label >Lojas</label>
    <select class="form-control" name='store'>
        @foreach($stores as $store)
            <option value='{{ $store->id }}'>{{ $store->name }}</option>
        @endforeach
    </select>
  </div>


  
  <button type="submit" class="btn btn-primary">CRIAR</button>

</form>

@endsection
