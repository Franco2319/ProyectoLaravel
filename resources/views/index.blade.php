@extends('layouts.app')

@section('content')

  <h3>Tus productos son:</h3>
  @foreach ($productos as $producto)
    <div class="">
      <h4> {{$producto->name}}</h4>
      <img src="/storage/{{$producto->image}}" alt="">
      <p> {{$producto->price}} </p>
      <p> <a href="/detalleProducto/{{$producto->id}}">Ver Mas</a> </p>
    </div>


  @endforeach

  {{$productos->Links()}}
@endsection
