@extends('layouts.app')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/images/wachinesbesandose.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/minitatomandosol.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/wachinroliga.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
<br>

<h1 class="text-center">
      Viviendo la marca del Rock
</h1>

<br>
<br>
<br>

<div class="container">
<div class="row">
  <article class="col text-center articuloindex">

    <a href="/remeras"><img src="/images/remeras.jpg" width="250" height="275"  alt=""></a>
    <h2>Remeras</h2>

  </article>

  <article class="col text-center articuloindex">

    <a href="/buzos"><img src="/images/buzos.jpg" width="250" height="275"  alt=""></a>
    <h2>Buzos</h2>

  </article>

  <article class="col text-center articuloindex">

    <a href="/jeans"><img src="/images/jeans.jpg" width="250"  height="275" alt=""></a>
    <h2>Jeans</h2>

  </article>

  <article class="col text-center articuloindex">

    <a href="/calzados"><img src="/images/calzados.jpg" width="250"  height="275"  alt=""></a>
    <h2>Calzados</h2>

  </article>
</div>

@endsection









<!-- <div class="container py-5">

  <div class="row text-center text-white mb-5">
    <div class="col-lg-7 mx-auto">
      <h1 class="display-4 h1-1">Productos</h1>
    </div>
  </div>


  <div class="row IDIV">

    <div class="col-lg-8 mx-auto">


      <ul class="list-group">

@foreach ($productos as $producto)

        <li class="list-group-item ILI">

          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">{{$producto->name}}</h5>

              <div class="d-flex align-items-center justify-content-between mt-1">
               <div class="">
                 <h6 class="font-weight-bold my-2">{{$producto->price}}</h6>
               </div>
              <div class="">
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                </ul>
              </div>


              </div>
              <p> <a href="/detalleProducto/{{$producto->id}}">Ver Mas</a> </p>
            </div><img src="/storage/{{$producto->image}}" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
          </div>
        </li>
@endforeach
    {{$productos->links()}} -->
