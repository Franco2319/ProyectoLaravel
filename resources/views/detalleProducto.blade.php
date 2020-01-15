@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col text-center">
    <img src="/storage/{{$productos->image}}" alt="">
  </div>
  <div class="col text-center text-white pt-5">
    <h2>{{$productos->name}}</h2>
    <h2>{{$productos->price}}</h2>
    <p>{{$productos->description}}</p>
    <label for="">ELEGI TU TALLE:</label>
    <select class="" name="">
      <option value="">XS</option>
      <option value="">S</option>
      <option value="">M</option>
      <option value="">L</option>
      <option value="">XL</option>
    </select>
    <br>
    @if (Auth::user())
     <a href="/cart/{{$productos->id}}" name="button">Comprar</a>
     @else
     <a href="/login" name="button">Comprar</a>
    @endif
    @if (Auth::user())
    @if (Auth::user()->rol == 9)
    <a href="/editarProducto/{{$productos->id}}"> Editar Producto </a>
    <a href="/borrarProducto/{{$productos->id}}"> Borrar Producto </a>
    @endif
   @endif
  </div>
</div>

























@endsection

<!-- <div class="row text-center text-white mb-5">
  <div class="col-lg-7 mx-auto">
    <h1 class="display-4 h1">Detalles</h1>
  </div>
</div>


  <div class="row">
    <div class="col-lg-8 mx-auto">
      <li class="list-group-item">
       <div class="media align-items-lg-center flex-column flex-lg-row p-3">
       <h4 class="mt-0 font-weight-bold mb-2"> {{$productos->name}}</h4>
       <img src="/storage/{{$productos->image}}" alt="" width="200" class="ml-lg-5 order-1 order-lg-2">
       <p class="font-weight-bold my-2"> {{$productos->price}} </p>
       <p class="font-italic text-muted mb-0 small"> {{$productos->description}} </p>
       @if (Auth::user())
       @if (Auth::user()->rol == 9)
       <a href="/editarProducto/{{$productos->id}}"> Editar Producto </a>
       <a href="/borrarProducto/{{$productos->id}}"> Borrar Producto </a>
       @endif
      @endif
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
      @if (Auth::user())
       <a href="/cart/{{$productos->id}}" name="button">Comprar</a>
       @else
       <a href="/login" name="button">Comprar</a>
      @endif
    </div>
   </div>

  </div> -->
