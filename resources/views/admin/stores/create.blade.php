@extends('layouts.app')

@section('content')

<form action="{{route('store')}}" method="post">

    @csrf

  <div class="form-group">
    <label >Nome Loja</label>
    <input type="text" class="form-control" name='name'>
  </div>

  <div class="form-group">
    <label >Descrição</label>
    <input type="text" class="form-control" name='description'>
  </div>

  <div class="form-group">
    <label >Telefone</label>
    <input type="text" class="form-control" name='phone'>
  </div>

  <div class="form-group">
    <label >Whats</label>
    <input type="text" class="form-control" name='mobile_phone'>
  </div>

  <div class="form-group">
    <label >Slug</label>
    <input type="text" class="form-control" name='slug'>
  </div>

  <div class="form-group">
    <label >Usuario</label>
    <select class="form-control" name='user'>
        @foreach($users as $user)
            <option {{ $user->id }} >{{ $user->name }}</option>
        @endforeach
    </select>
  </div>


  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
