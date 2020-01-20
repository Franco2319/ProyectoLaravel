@extends('layouts.app')

@section('content')

@if ($productos)
<div class="row text-center text-white mb-5">
  <div class="col-lg-7 mx-auto">
    <h1 class="display-4 h1">¿Comprás?</h1>
  </div>
</div>

@foreach ($productos as $producto)
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <li class="list-group-item">
       <div class="media align-items-lg-center flex-column flex-lg-row p-3">
       <h4 class="mt-0 font-weight-bold mb-2"> {{$producto->name}}</h4>
       <img src="/storage/{{$producto->image}}" alt="" width="200" class="ml-lg-5 order-1 order-lg-2">
       <p class="font-weight-bold my-2"> {{$producto->price}} </p>
       <p class="font-italic text-muted mb-0 small"> {{$producto->description}} </p>
    </div>
   </div>
 </div>
@endforeach
  <div class="d-flex flex-row bd-highlight mb-3 finalizarcompra button">
    <a href="#finalizarcompra" name="button" class="aboton" id="finalizar">Finalizar Compra</a>
  </div>
@else
<div class="row text-center text-white mb-5">
  <div class="col-lg-7 mx-auto">
    <h1 class="display-4 h1">No hay productos en el carrito</h1>
  </div>
</div>
@endif





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection
