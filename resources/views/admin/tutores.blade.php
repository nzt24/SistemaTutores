@extends('admin.plantilla')
@section('title', 'Tutores')
@section('TUTORES','active bg-primary  rounded')
@section('content')

<div class=" border-left border-right">
  <div class="px-3 pt-3 bg-white">
    <!-- TABS -->
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-tutores-tab" data-toggle="tab" href="#nav-tutores" role="tab" aria-controls="nav-tutores" aria-selected="true">Tutores</a>
        <a class="nav-item nav-link" id="nav-agregar_tutor-tab" data-toggle="tab" href="#nav-agregar_tutor" role="tab" aria-controls="nav-agregar_tutor" aria-selected="false">Agregar Tutor</a>
      </div>
     </nav>
     <!-- FIN DE TABS -->


      <!-- CONTENIDO DE TABS -->
        <div class="tab-content" id="nav-tabContent">
          <!-- INICIO TAB 1 -->
          <div class="tab-pane fade show active" id="nav-tutores" role="tabpanel" aria-labelledby="nav-tutores-tab">

            @if(App\Tutor::All()->count()==0)
            <div class="alert alert-primary mt-3" role="alert">
                No se ha encontrado a ningún tutor en el sistema.
            </div>
            @else
            @php
            $indice=0
            @endphp
            <table class="table text-secondary">
                <thead class="">
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Tutor</th>
                    <th scope="col">Numero de Trabajador</th>
                    <th scope="col">Ver Grupos</th>
                    <th scope="col">Restablecer Constraseña</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach(App\Tutor::All() as $tutor)
                  <tr>
                    <th scope="row">{{$indice=$indice+1}}</th>
                    <td>{{$tutor->nombre." ".$tutor->apellido_paterno." ".$tutor->apellido_materno}}</td>
                    <td>{{$tutor->matricula}}</td>
                    <td> <a href="#">Grupos</a> </td>
                    <td> <a href="#">Restablecer</a> </td>
                  </tr>
                </tbody>
                @endforeach
            </table>
            @endif
          </div>
          <!-- FIN TAB 1 -->
          <!-- INICIO TAB 2 -->
          <div class="tab-pane fade" id="nav-agregar_tutor" role="tabpanel" aria-labelledby="nav-agregar_tutor-tab">
            <form class="mt-3" action="{{route('registrar')}}" method="post">
               @csrf
            <!-- Nombre -->
            <div class="row mb-2">
              <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
                  Nombre:
              </div>
              <div class="col-6 col-sm-6">
                  <input class="form-control" type="text" name="nombre" value="" >
              </div>
            </div>
            <!-- Apellido Paterno -->
            <div class="row mb-2">
              <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
                  Apellido Paterno:
              </div>
              <div class="col-6 col-sm-6">
                  <input class="form-control" type="text" name="paterno" value="" >
              </div>
            </div>
            <!-- Apellido Materno -->
            <div class="row mb-2">
              <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
                  Apellido Materno:
              </div>
              <div class="col-6 col-sm-6">
                  <input class="form-control" type="text" name="materno" value="" >
              </div>
            </div>
            <!-- Num trabajador -->
            <div class="row mb-2">
              <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
                  Numero de Trabajador:
              </div>
              <div class="col-6 col-sm-6">
                  <input class="form-control" type="text" name="num_trabajador" value="" >
              </div>
            </div>
            <!-- boton -->
            <div class="text-center">
                <button type="submit"  class=" btn btn-primary btn-sm mb-2  pl-3 pr-3">
                  Agregar Tutor</button>
              </div>

          </form>


          </div>
          <!-- FIN TAB 2 -->
        </div>

      <!-- FIN DEL CONTENIDO DE TABS -->

  </div>
</div>
@endsection
