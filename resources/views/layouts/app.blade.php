<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/2fdedde1e8.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @if (!Auth::user())
    <link href="{{ asset('css/invi.css') }}" rel="stylesheet">
    @elseif (Auth::user()->rol == 9)
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    @else
    <link href="{{ asset('css/usu.css') }}" rel="stylesheet">
    @endif
</head>
<body>
    <div id="app">
        <nav class="container-fluid navbar navbar-expand-md navbar-light shadow-sm navcontainer">
            <div class="row divmayor">

              <div class="col-md-6 col-sm-2 topnav">
                   <div class="search-container">
     <!--                               EMPIEZA EL BUSCADOR                                          -->
                     <form action="/buscador">
                       {{ csrf_field() }}
                       <input class="inputbuscador" type="text" placeholder="Buscar.." name="search">
                       <button class="buttonlupita" type="submit"><i class="fa fa-search"></i></button>
                     </form>
                   </div>
                 </div>
             @if (Auth::user())
             <div class="carritoli"><a href="/carrito"><i class="fas fa-cart-plus carritoi"></i></a></div>
             @else
             <div class="carritoli"><a href="/login"><i class="fas fa-cart-plus carritoi"></i></a></div>
             @endif
             <div class="preguntasli"><a href="/preguntas"><i class="far fa-question-circle preguntasi"></i></a></div>


                <a class="col-md-4 navbar-brand imagelogo" href="{{ url('/index') }}">
                    <img class="escorpioncito" src="/images/val.PNG" alt="" width="107.5px">
                </a>

                <!-- <button class="navbar-toggler botonnav" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <div class="col-md-4  divusuario" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="carrito navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item iniciarsesion">
                                <a class="nav-link text-dark" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item crearcuenta">
                                    <a class="nav-link text-dark" href="{{ route('register') }}">{{ __('Crear Cuenta') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                        @if (Auth::user())
                         @if (Auth::user()->rol == 9)
                          <li> <a class="liproducto" href="{{url('/addProduct')}}"> Añadir Producto </a> </li>
                         @endif
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #996515;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">ENCONTRANOS EN NUESTRAS REDES SOCIALES !</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Navegación</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Nuestros locales</a>
        </p>
        <p>
          <a href="#!">Seguimiento de envíos</a>
        </p>
        <p>
          <a href="#!">Política de privacidad</a>
        </p>
        <p>
          <a href="#!">Términos y Condiciones</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Productos</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Remeras</a>
        </p>
        <p>
          <a href="#!">Buzos</a>
        </p>
        <p>
          <a href="#!">Jeans</a>
        </p>
        <p>
          <a href="#!">Calzados</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Links utiles</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Tu cuenta</a>
        </p>
        <p>
          <a href="#!">Revendedores</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Ayuda</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contacto</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> CABA, San Telmo, AR</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> shop@valhalla.com.ar</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +54 11 7555 2878 </p>
        <p>
          <i class="fas fa-print mr-3"></i> +54 11 7555 2823 </p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">COPYRIGHT VALHALLA IND - 2020. TODOS LOS DERECHOS RESERVADOS.
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</body>
</html>
