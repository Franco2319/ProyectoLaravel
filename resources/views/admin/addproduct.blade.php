<?php
$valores = [
  "Jeans" => "JN",
  "Remeras" => "RM",
  "Calzado" => "CL",
  "Buzos" => "BZ",
];
 ?>
@extends('layouts.app')

@section('content')
  <div class="row text-center">


  <form class="text-white" action="/addProduct" method="post" enctype="multipart/form-data">
    <h3>Agrega un Producto</h3>
    {{-- {{csrf_field()}} --}}
    @csrf
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
    </ul>
    <div class="">
      <label for="name">Nombre:</label>
      <br>
      <input type="text" name="name" value="">
    </div>
    <div class="">
      <label for="price">Precio:</label>
      <br>
      <input type="number" name="price" value="">
    </div>
    <div class="">
      <label for="description">Descripcion:</label>
      <br>
      <textarea name="description" rows="8" cols="80"></textarea>
    </div>
    <div class="">
      <label for="image">Foto:</label>
      <br>
      <input type="file" name="image" value="">
    </div>
    <div class="">
      <label for="category">Categoria:</label>
      <br>
      @foreach ($valores as $categoria => $valor)
      <input type="radio" name="category" value="{{$valor}}">{{$categoria}}
      @endforeach
    </div>
    <div class="">
      <button type="submit" name="button">Guardar Producto</button>
    </div>
  </form>
</div>

@endsection
