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

<h1 class="text-center text-white titulopagina">
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
