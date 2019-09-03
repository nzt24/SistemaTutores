@extends('tutor.plantilla')
@section('title', 'Perfil')
@section('PERFIL','active bg-primary  rounded')

@section('content')
<div class="container bg-light  pt-2 ">

  <div class="container bg-white border border-primary rounded ">

      <p class="border-bottom "><h5 class="text-primary text-center">Perfil</h5></p>
      <form class="" action="index.html" method="post">
        <!-- Nombre -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Nombre:
          </div>
          <div class="col-6 col-sm-6">
              <input class="form-control" type="text" name="nombre" value="">
          </div>
        </div>
        <!-- Apellido Paterno -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Apellido Paterno:
          </div>
          <div class="col-6 col-sm-6">
              <input class="form-control" type="text" name="paterno" value="">
          </div>
        </div>
        <!-- Apellido Materno -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Apellido Materno:
          </div>
          <div class="col-6 col-sm-6">
              <input class="form-control" type="text" name="materno" value="">
          </div>
        </div>
        <!-- Cubiculo -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
            Cubículo:
          </div>
          <div class="col-6 col-sm-6">
              <input class="form-control" type="text" name="cubiculo" value="">
          </div>
        </div>
        <!-- Horario -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Horario Para Asesorías:
          </div>
          <div class="col-6 col-sm-6">
              <input class="form-control" type="text" name="horario" value="">
          </div>
        </div>
        <!-- correo -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Correo:
          </div>
          <div class="col-6 col-sm-6">
              <input class="form-control" type="mail" name="correo" value="">
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
            <button  class=" btn btn-primary btn-lg mb-2  pl-3 pr-3" name="button">Guardar Cambios</button>
          </div>


      </form>

    </div>

    </div>
  </div>

@endsection
