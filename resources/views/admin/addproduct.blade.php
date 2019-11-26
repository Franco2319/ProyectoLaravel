@extends('layouts.app')

@section('content')
  <h3>Agrega un Producto</h3>

  <form class="" action="/addProduct" method="post" enctype="multipart/form-data">
    {{-- {{csrf_field()}} --}}
    @csrf
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
    </ul>
    <div class="">
      <label for="name">Nombre:</label>
      <input type="text" name="name" value="">
    </div>
    <div class="">
      <label for="price">Precio:</label>
      <input type="number" name="price" value="">
    </div>
    <div class="">
      <label for="description">Descripcion:</label>
      <textarea name="description" rows="8" cols="80"></textarea>
    </div>
    <div class="">
      <label for="image">Foto:</label>
      <input type="file" name="image" value="">
    </div>
    <div class="">
      <button type="submit" name="button">Guardar Producto</button>
    </div>
  </form>

@endsection
