@extends('layouts.app')

@section('content')

<form action="{{ route('admin.stores.store') }}" method="post">

    @csrf

  <div class="form-group">
    <label >Nome Loja</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name='name' value="{{old('name')}}" >

    @error('name')
        <div class="invalid-feedback">
          {{$message}}
        </div>
    @enderror

  </div>

  <div class="form-group">
    <label >Descrição</label>
    <input type="text" class="form-control @error('description') is-invalid @enderror" name='description' value="{{old('description')}}">
    @error('description')
        <div class="invalid-feedback">
          {{$message}}
        </div>
    @enderror
  </div>

  <div class="form-group">
    <label >Telefone</label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror" name='phone' value="{{old('phone')}}">
    @error('phone')
        <div class="invalid-feedback">
          {{$message}}
        </div>
    @enderror
  </div>

  <div class="form-group">
    <label >Whats</label>
    <input type="text" class="form-control @error('mobile_phone') is-invalid @enderror" name='mobile_phone' value="{{old('mobile_phone')}}">
    @error('mobile_phone')
        <div class="invalid-feedback">
          {{$message}}
        </div>
    @enderror
  </div>

  <div class="form-group">
    <label >Slug</label>
    <input type="text" class="form-control @error('slug') is-invalid @enderror" name='slug'>
    @error('name')
        <div class="invalid-feedback">
          {{$message}}
        </div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
