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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                    <a class="nav-link pl-4  pr-4 @yield('GRUPOS') text-white" href="{{route('Tutor_Grupos')}}">MIS GRUPOS</a>
                </li>
                  <li class="nav-item mr-2">
                      <a class="nav-link pl-4  pr-4 @yield('PERFIL') text-white" href="{{route('Tutor_Perfil')}}">MI PERFIL</a>
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
      <p class="text-secondary text-right">Tutor :
        @php
          $tutor=App\Tutor::where('matricula',auth()->user()->matricula)->get();
          echo $tutor[0]->nombre;
          echo " ";
          echo $tutor[0]->apellido_paterno;
          echo " ";
          echo $tutor[0]->apellido_materno;
        @endphp

         </p>
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

<script type="text/javascript">

jQuery(document).ready(function(){

            $('#tabla_alumnos').hide();
            jQuery('#CargarDocumento').click(function(e){
                var formData = new FormData(document.getElementById('CrearGrupo'));

             //  $.ajaxSetup({
             //     headers: {
             //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
             //     }
             // });


             $.ajax({
                 url: "{{ url('/CargarDocumento') }}",
                 type: "post",
                 dataType: "html",
                 data: formData,
                 cache: false,
                 contentType: false,
                 processData: false
             })
                 .done(function(res){
                  var alumnos = JSON.parse(res);
                  alumnos=alumnos[0];
                    var i;
                    for(i=0;i<alumnos.length;i++){
                      if(alumnos[i][0]!=null){
                       $('#fila').append( '<tr><th>'+(i+1)+'</th><td>'+alumnos[i][0]+'</td> <td>'+alumnos[i][1]+'</td><td>'+alumnos[i][2]+'</td> <td>'+alumnos[i][3]+'</td> </tr>' );
                      }
                    }


                        $('#tabla_alumnos').show();
                 });



           });
         });
</script>

  </body>
</html>
