@extends('tutor.plantilla')
@section('title', 'Grupos')
@section('GRUPOS','active bg-primary  rounded')
@section('content')
<!-- CONTENIDO -->
<div class=" border-left border-right">

  <div class="px-3 pt-3 bg-white">
    <nav class="bg-white">
      <div class="nav nav-tabs " id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-grupos-tab" data-toggle="tab" href="#nav-grupos" role="tab" aria-controls="nav-grupos" aria-selected="true">Grupos</a>
        <a class="nav-item nav-link" id="nav-agregar_grupo-tab" data-toggle="tab" href="#nav-agregar_grupo" role="tab" aria-controls="nav-agregar_grupo" aria-selected="false">Agregar Grupo</a>
      </div>
    </nav>

    <div class="tab-content " id="nav-tabContent">
      <!-- GRUPOS -->
      <div class="tab-pane fade show active " id="nav-grupos" role="tabpanel" aria-labelledby="nav-grupos-tab">
        <div class="tab-pane fade show active table-responsive " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <table class="table text-secondary">
            <thead class="">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Sección</th>
                <th scope="col">Generación</th>
                <th scope="col">Carrera</th>
                <th scope="col">Alumnos</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>

                @php
                $tutor = App\Tutor::where('matricula',auth()->user()->matricula)->get()->find(1);
                $grupos = App\Grupo::where('id_tutor',$tutor->id_tutor)->get();
                $indice = 0;
                @endphp

                @foreach ($grupos as $grupo)
                @php $indice=$indice+1; @endphp
                @php  $carrera = App\Carrera::where('id_licenciatura',$grupo->id_licenciatura)->get()->find(1);
                @endphp

                <tr>
                  <td>{{$indice}}</td>
                  <td>{{$grupo->seccion}}</td>
                  <td>{{$grupo->generacion}}</td>
                  <td>{{$carrera->nombre}}</td>
                  <td> <a target="_blank" href="{{route('Ver_Alumnos',['seccion' => $grupo->seccion ,'generacion' => $grupo->generacion, 'carrera' => $carrera->id_licenciatura, 'tutor' => $tutor->id_tutor])}}">Ver Alumnos</a> </td>
                  <td> <a href="#">Eliminar</a> </td>
                </tr>
                @endforeach



            </tbody>
          </table>
        </div>
      </div>

        <!-- AGREGAR GRUPO -->
      <div class="tab-pane fade" id="nav-agregar_grupo" role="tabpanel" aria-labelledby="nav-agregar_grupo-tab">
        <div class="pt-2">
          <form class="" id="CrearGrupo" action="{{route('agregarGrupo')}}" method="post" enctype="multipart/form-data">
            {{ method_field('POST') }}
             @csrf
              <!-- fila 1 -->
             <div class="row mt-3">
               <div class="col">
                 <p class="text-secondary">Para cargar alumnos al grupo deberá subir un archivo con extensión .xlsx. El cual deberá llevar Matricula, Nombre, Apellido paterno, Apellido materno de los alumnos.
                 <a href="#">Descargar Ejemplo</a>
                 </p>
               </div>
             </div>
              <!-- fila 2 -->
             <div class="row">
                    <div class="col-12 col-sm-4">
                      <span>Seccion:</span>
                      <input type="text" class="form-control" placeholder="Ejemplo: 101" name="seccion">
                    </div>

                    <div class="col-12 col-sm-4">
                        <span>Periodo de Ingreso:</span>
                              <select class="form-control" type="text" name="periodo" value="">
                               <option value="Primavera @php echo date('Y') @endphp" >Primavera @php echo date('Y') @endphp </option>
                               <option value="Otoño @php echo date('Y') @endphp" >Otoño @php echo date('Y') @endphp </option></select>
                    </div>

                    <div class="col-12 col-sm-4">
                        <span>Licenciatura:</span>
                        <select class="form-control" type="text" name="licenciatura" value="">
                           <option value="1" >Ing. en Cs. de la Computación</option>
                        </select>
                    </div>
            </div>

              <!-- fila 3 -->
            <div class="row mt-3">
              <div class="col-12 col-sm-4">
                <input class="form-control-file" type="file" name="excel" id="excel">
              </div>
              <div class="col-12 col-sm-4">
                  <button type="button"  class=" btn btn-primary mb-2  pl-5 pr-5" name="CargarDocumento" id="CargarDocumento">Cargar documento</button>
              </div>
            </div>

            <!-- MOSTRAMOS LA LISTA DE ALUMNOS QUE SE CARGARON -->
            @include('tutor.mostrar_alumnos_tabla')
            <!-- FIN -->

          </form>

        </div>
      </div>
        </div>
    </div>
</div>
@endsection
