<?php
$valores = [
  "Jeans" => "JN",
  "Remeras" => "RM",
  "Calzados" => "CL",
  "Buzos" => "BZ",
]; ?>
@extends('layouts.app')

@section('content')

<div class="row text-center">

  <form class="text-white" action="/editarProducto" method="post" enctype="multipart/form-data">
    <h3>Editar Producto:</h3>
    @csrf
    @method('PUT')
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
    <input type="hidden" name="id" value="{{$producto->id}}">
    <div class="">
      <label for="nombre">Nombre:</label>
      <br>
      <input type="text" name="nombre" value="{{$producto->name}}">
    </div>
    <div class="">
      <label for="precio">Precio:</label>
      <br>
      <input type="number" name="precio" value="{{$producto->price}}">
    </div>
    <div class="">
      <label for="nombre">Descripcion:</label>
      <br>
      <textarea name="descripcion" rows="8" cols="80" value="{{$producto->description}}"></textarea>
    </div>
    <div class="">
      <label for="nombre">Foto:</label>
      <br>
      <input type="file" name="foto" value="">
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
