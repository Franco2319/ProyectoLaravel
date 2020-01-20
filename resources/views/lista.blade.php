@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
  @foreach ($productos as $producto)
  <article class="col text-center text-white articuloindex">

    <a href="/detalleProducto/{{$producto->id}}"><img src="/storage/{{$producto->image}}" width="250" height="275"  alt="Imagen Producto"></a>
    <h2>{{$producto->name}}</h2>
    <a href="/detalleProducto/{{$producto->id}}"><p class="vermas">Ver Mas</p></a>

  </article>
  @endforeach
</div>
@endsection
