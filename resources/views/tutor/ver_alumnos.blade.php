@extends('tutor.plantilla')
@section('title', 'Ver Alumnos')
@section('GRUPOS','active bg-primary  rounded')
@section('content')
<!-- CONTENIDO -->
<div class=" border-left border-right">


  <div class=" card table-responsive mt-4">
    <div class=" text-center card-header">
      Lista de Alumnos
    </div>
    <table class="table text-secondary table-sm">
      <thead class="">
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Matricula</th>
          <th scope="col">Nombre</th>
          <th scope="col">Promedio Gral.</th>
          <th scope="col">Avance.</th>
          <th scope="col">Mapa Grafico</th>
          <th scope="col">Informacion</th>
        </tr>
      </thead>
      <tbody>
        @php
        $indice = 0;
        @endphp
        @foreach ($Alumnos as $Alumno)
        <tr>
          <th scope="row">{{$indice=$indice+1}}</th>
          <td>{{$Alumno->matricula}}</td>
          <td>{{$Alumno->nombre.' '.$Alumno->apellido_paterno.' '.$Alumno->apellido_materno}}</td>
          <td>{{$Alumno->promedio_general}}</td>
          <td>{{$Alumno->porcentaje}}</td>
          <td> <a href="#">Mapa Grafico</a> </td>
          <td> <a href="#">Ver</a> </td>
        </tr>
        @endforeach

      </tbody>
    </table>

  </div>

</div>
@endsection
