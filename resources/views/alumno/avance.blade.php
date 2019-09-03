@extends('alumno.plantilla')
@section('title', 'AVANCE')
@section('AVANCE','active bg-primary  rounded')
@section('content')
<div class="container bg-light  pt-5 pb-5 ">

  <div class="container bg-white border border-primary rounded ">
    <div>
      <p class="border-bottom "><h5 class="text-primary text-center">Avance Curricular</h5></p>
      <hr>
      <div class="container">
        <!-- Nombre -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Nombre:
          </div>
          <div class="col-6 col-sm-6">
            {{$Alumno->nombre.' '.$Alumno->apellido_paterno.' '.$Alumno->apellido_materno}}
          </div>
        </div>
        <!-- Carrera -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Licenciatura:
          </div>
          <div class="col-6 col-sm-6">
          {{$Carrera->nombre}}
          </div>
        </div>
        <!-- Carrera -->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Matricula:
          </div>
          <div class="col-6 col-sm-6">
            {{$Alumno->matricula}}
          </div>
        </div>
        <!-- Promedio-->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Promedio:
          </div>
          <div class="col-6 col-sm-6">
            {{$Alumno->promedio_general}}
          </div>
        </div>
        <!-- Materias Aprobadas-->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Materias Aprobadas:
          </div>
          <div class="col-6 col-sm-6">

          </div>
        </div>
        <!-- Materias faltantes-->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Materias Por Cursar:
          </div>
          <div class="col-6 col-sm-6">

          </div>
        </div>
        <!-- Numero de creditos ganados-->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Creditos Ganados:
          </div>
          <div class="col-6 col-sm-6">

          </div>
        </div>
        <!-- Avance-->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Avance:
          </div>
          <div class="col-6 col-sm-6">
            {{$Alumno->porcentaje.'%'}}
          </div>
        </div>
        <!-- Periodo Aproximado de Finalacin-->
        <div class="row mb-2">
          <div class=" col-3 col-sm-3 text-right font-weight-bold text-primary">
              Perido Aproximado de Termino:
          </div>
          <div class="col-6 col-sm-6">

          </div>
        </div>
    </div>
    </div>
    </div>
  </div>
@endsection
