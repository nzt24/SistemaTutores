<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="">
    <style>
      .nav_bar{
        background-color:#003B5C;
        border-bottom:3px solid;

      }
      footer{
        background-color:#003B5C;
        border-top:3px solid;
        color: #00b5e2;
      }

      .contenido{
        height: 100vh;
      }

    </style>
  </head>
  <body>

    <nav class="navbar navbar-light navbar-expand-md navbar-light  border-primary nav_bar ">
        <!-- Marca o Imagen  -->
        <div class="container">
          <a class="navbar-brand " href="#">
            <img src="{{ asset('img/fccb.png') }}" width="200px" height="" alt="logo_facultadad_ciencias_computacion_buap">
          </a>
            <!-- boton responsivo -->
          <button
                class="navbar-toggler bg-light"
                type="button"
                data-toggle="collapse"
                data-target="#MenuAlumno"
                aria-controls="MenuAlumno"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
          </button>

          <!-- ENLACES -->
          <div class="collapse navbar-collapse" id="MenuAlumno">
              <ul class="navbar-nav  ml-auto">
                <li class="nav-item mr-2">
                    <a class="nav-link pl-4  pr-4 @yield('TUTORES') text-white" href="{{route('Admin_Tutores')}}">Tutores</a>
                </li>
                  <li class="nav-item mr-2">
                      <a class="nav-link pl-4  pr-4 @yield('CUENTA') text-white" href="{{route('Admin_Cuenta')}}">Cuenta</a>
                  </li>
                  <li>
                      <a class="nav-link pl-4  pr-4 text-white" href="{{route('logout')}}">SALIR</a>
                  </li>
              </ul>
          </div>

          </div>
    </nav>

    <!-- CONTENIDO -->
    <div class="container contenido">
        <!-- {{auth()->user()}} -->

    <p class="text-secondary text-right">Administrador</p>
        @yield('content')
    </div>



    <footer class="border-primary text-center mt-4 pt-3 pb-3">
      @yield('footer')
      <div class="container">
          <div class="row">
              <div class="col-sm text-center mb-3">
              <img src="{{ asset('img/logo_buap_letra.png') }}"width="180px" alt="">
              </div>
              <div class="col-sm text-md-left">
                <small>
                 <p>© 2019 Copyright
                  Benemérita Universidad Autónoma de Puebla <br>
                  Facultad de Ciencias de la Computación
                  </p>
                </small>

              </div>
              <div class="col-sm text-md-left">
                <p>
                  <small>

                  Facultad de Cs. de la Computación<br>
                  14 sur y Av. San Claudio C.P Puebla,Puebla<br>
                  México.
                  </small>
                </p>
              </div>
            </div>
          </div>
    </footer>
  </body>
</html>
