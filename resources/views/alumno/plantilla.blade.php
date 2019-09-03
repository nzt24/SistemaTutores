<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="">
    <style>
      nav{
        background-color:#003B5C;
        border-bottom:3px solid;

      }
      footer{
        background-color:#003B5C;
        border-top:3px solid;
        color: #00b5e2;
      }

    </style>
  </head>
  <body>

    <nav class="navbar navbar-light navbar-expand-md navbar-light  border-primary">
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
                  <li class="nav-item mr-2  ">
                      <a class="nav-link pl-4 pr-4 @yield('INICIO') text-white" href="{{route('Alumno')}}">INICIO</a>
                  </li>
                  <li class="nav-item mr-2">
                      <a class="nav-link pl-4  pr-4 @yield('PERFIL') text-white" href="{{route('Alumno_Perfil')}}">MI PERFIL</a>
                  </li>
                  <li class="nav-item mr-2">
                      <a class="nav-link pl-4  pr-4 @yield('MAPA') text-white" href="{{route('Alumno_MapaGrafico')}}">MAPA GRAFICO</a>
                  </li>
                  <li class="nav-item mr-2">
                      <a class="nav-link pl-4  pr-4 @yield('AVANCE') text-white" href="{{route('Alumno_Avance')}}">AVANCE CURRICULAR</a>
                  </li>
                  <li>
                      <a class="nav-link pl-4  pr-4 text-white" href="{{route('logout')}}">SALIR</a>
                  </li>
              </ul>
          </div>

          </div>
    </nav>

    <!-- CONTENIDO -->

    <div class="container bg-white">
      <div class="text-right">
        @php
        $Alumno = App\Alumno::where('matricula',auth()->user()->matricula)->get();
        @endphp
        <p>Alumno: {{$Alumno[0]->nombre.' '.$Alumno[0]->apellido_paterno.' '.$Alumno[0]->apellido_materno}}</p>
      </div>
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
                  Faculta de Ciencias de la Computación
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
