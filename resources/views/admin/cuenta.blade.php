@extends('admin.plantilla')
@section('title', 'Tutores')
@section('CUENTA','active bg-primary  rounded')
@section('content')
<div class="container bg-light  pt-2 ">

  <div class="container bg-white border border-primary rounded ">

      <p class="border-bottom "><h5 class="text-primary text-center">Cuenta</h5></p>
      <form class="" action="index.html" method="post">
        <!-- Nueva contraseña -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Contraseña Actual:
          </div>
          <div class="col-6 col-sm-6">
              <input class="form-control" type="password" name="password_actual" value="">
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
            <button  class=" btn btn-primary btn-lg mb-2  pl-3 pr-3" name="button">Cambiar Contraseña</button>
          </div>


      </form>

    </div>

    </div>
  </div>

@endsection
