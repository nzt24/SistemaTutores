@extends('alumno.plantilla')
@section('title', 'Perfil')
@section('PERFIL','active bg-primary  rounded')
@section('content')
<div class="container bg-light  pt-5 pb-5 ">
  @php
  $Alumno = App\Alumno::where('matricula',auth()->user()->matricula)->get();
  $Grupo = App\Grupo::where('id_grupo',$Alumno[0]->id_grupo)->get();
  $Carrera = App\Carrera::where('id_licenciatura',$Grupo[0]->id_licenciatura)->get();
  @endphp
  <div class="container bg-white border border-primary rounded ">
    <div>
      <p class="border-bottom "><h5 class="text-primary text-center">Datos Personales</h5></p>
      <hr>

      <div class="container">
        <!-- Nombre -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Nombre:
          </div>
          <div class="col-6 col-sm-6">
            {{$Alumno[0]->nombre.' '.$Alumno[0]->apellido_paterno.' '.$Alumno[0]->apellido_materno}}
          </div>
        </div>
        <!-- Facultad -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Facultad:
          </div>
          <div class="col-6 col-sm-6">
              Ciencias de la Computación
          </div>
        </div>
        <!-- Carrera -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Licenciatura:
          </div>
          <div class="col-6 col-sm-6">
              {{$Carrera[0]->nombre}}
          </div>
        </div>
        <!-- Carrera -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Matricula:
          </div>
          <div class="col-6 col-sm-6">
              {{auth()->user()->matricula}}
          </div>
        </div>
    </div>
    </div>
    <hr>


    <div>
      <p class="border-bottom "><h5 class="text-primary text-center">Cuenta</h5></p>
      <form class="" action="{{route('updatePerfil')}}" method="post">
         @csrf
        <!-- correo -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Correo:
          </div>
          <div class="col-6 col-sm-6">
              <input class="form-control" type="mail" name="correo" value="{{$Alumno[0]->correo}}" placeholder="Ingrese un correo de contacto">
          </div>
        </div>
        <!-- Nueva contraseña -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Nueva Contraseña:
          </div>
          <div class="col-6 col-sm-6">
              <input class="form-control" type="password" name="password1" value="">
          </div>
        </div>
        <!-- Repetir contraseña contraseña -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Repetir Contraseña:
          </div>
          <div class="col-6 col-sm-6">
              <input class="form-control" type="password" name="password2" value="">
          </div>
        </div>

          <div class="text-center">
            <button type="submit"  class=" btn btn-primary btn-lg mb-2  pl-3 pr-3" name="button">Guardar Cambios</button>
          </div>


      </form>

    </div>

    </div>
  </div>

@endsection

    <!-- CONTENIDO -->
