@extends('layouts.app')

@section('content')

  <h3>Detalle del producto seleccionado:</h3>


    <div class="">
      <h4> {{$productos->name}}</h4>
      <img src="/storage/{{$productos->image}}" alt="">
      <p> {{$productos->price}} </p>
      <p> {{$productos->description}} </p>
      <a href="#">Comprar</a>
      @if (Auth::user())
       @if (Auth::user()->rol == 9)
       <a href="/editarProducto/{{$productos->id}}"> Editar Producto </a>
       <a href="/borrarProducto/{{$productos->id}}"> Borrar Producto </a>
       @endif
      @endif

    </div>





@endsection
