@extends('alumno.plantilla')

@section('title', 'INICIO')
@section('INICIO','active bg-primary  rounded')


@section('content')
<!-- CONTENIDO -->
<div class="container bg-light  pt-5 pb-5 text-center">
  <h3 class="text-primary  pl-5 pr-5">Sistema de Tutorados</h3>
  <p  class="text-secondary font-weight-normal text-justify pl-5 pr-5">
    Este sistema ayuda a proveer información al alumno y tu tutor sobre cuál es el avance en su carrera universitaria.<br><br>
    Con ayuda del alumno, el cual deberá ir actualizando el estatus de las materias ya ha cursado, o que está cursando actualmente. Con esta información el sistema le hará saber al alumno cuál es el avance en su carrera, proveerá de una proyección de materias para que alumno pueda cursar el próximo semestre, y mostrara el tiempo en el alumno puede concluir satisfactoriamente su carrera.<br><br>
    Todo esto con ayuda del tutor académico asignado, ya que él puede modificar la proyección de materias con el fin de que ayude al alumno a tener un avance más rápido en la carrera.
  </p>
  <div class="col-md-12">
  <img src="{{ asset('img/tutores.png') }}" class="rounded mx-auto d-block img-fluid" width="40%" alt="...">
  </div>
</div>
@endsection
