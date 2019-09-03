@extends('alumno.plantilla')
@section('title', 'MAPA GRAFICO')
@section('MAPA','active bg-primary  rounded')
@section('content')
<div class="container">
  <div class=" row text-center font-bold mt-1 mb-1  font-weight-bold ">

      <div class="col-sm bg-light ml-1 mr-1 pt-1 pb-1 rounded">
          <small>NO DISPONIBLE</small>
      </div>
      <div class="col-sm bg-warning ml-1 mr-1 pt-1 pb-1 rounded">
          <small>DISPONIBLE</small>
      </div>
      <div class="col-sm bg-success ml-1 mr-1  pt-1 pb-1 rounded">
          <small>CURSANDO ACTUALMENTE</small>
      </div>
      <div class="col-sm bg-primary ml-1 mr-1  pt-1 pb-1 rounded">
          <small>APROBADA</small>
      </div>
      <div class="col-sm bg-danger ml-1 mr-1  pt-1 pb-1 rounded">
          <small>REPROBADA</small>
      </div>

  </div>

</div>

<!-- CONTENIDO -->

<div class="container   pt-3 pb-5 ">
  <div class="container">


    <!-- COMIENZA MAPA GRAFICO -->
    <p class="mt-2 ml-2 mr-2 pt-3 pb-3 text-center bg-primary text-white font-weight-bold  rounded">
       FACULTAD DE CIENCIAS DE LA COMPUTACIÓN–BUAP | INGENIERÍA EN CIENCIAS DE LA COMPUTACIÓN- 2017</p>
    <div class="table-responsive bg-white rounded">
      <table class="table  text-center small mt-2 ml-2 mr-2 pt-3 pb-3">
        <thead>
              <tr class="bg-secondary text-white">
                <th class="border-bottom" scope="col">1</th>
                <th class="border-bottom" scope="col">2</th>
                <th class="border-bottom" scope="col">3</th>
                <th class="border-bottom" scope="col">4</th>
                <th class="border-bottom" scope="col">5</th>
                <th class="border-bottom" scope="col">6</th>
                <th class="border-bottom" scope="col">7</th>
                <th class="border-bottom" scope="col">8</th>
                <th class="border-bottom" scope="col">9</th>
                <th class="border-bottom" scope="col">10</th>
              </tr>
        </thead>
        <tbody>
                <tr>
                  <td class="border border-white rounded materia"  id="ICCS001">MATEMÁTICAS</td>
                  <td class="border border-white  rounded materia"  id="CCOS007">CÁLCULO<br> DIFERENCIAL</td>
                  <td class="border border-white  rounded materia"  id="CCOS008">CÁLCULO<br> INTEGRAL</td>
                  <td class="border border-white  rounded materia"  id="ICCS006">ECUACIONES<br> DIFERENCIALES</td>
                  <td class="border border-white  rounded materia"  id="CCOS251">PROBAB. Y<br> ESTADÍSTICA</td>
                  <td class="border border-white  rounded materia"  id="ICCS259">MODELOS DE<br> REDES</td>
                  <td class="border border-white  rounded materia"  id="ICCS260">REDES<br> INALÁMBRICAS</td>
                  <td class="border border-white  rounded materia"  id="ICCS254">TEORÍA<br> DE CONTROL</td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                </tr>

                <tr>
                  <td class="border border-white  rounded materia"  id="CCOS003">ÁLGEBRA<br> SUPERIOR</td>
                  <td class="border border-white  rounded materia"  id="ICCS002">FÍSICA I</td>
                  <td class="border border-white  rounded materia"  id="ICCS004">FÍSICA II</td>
                  <td class="border border-white  rounded materia"  id="ICCS007">CIRCUITOS<br> ELÉCTRICOS</td>
                  <td class="border border-white  rounded materia"  id="ICCS250">CIRCUITOS<br> ELECTRÓNICOS</td>
                  <td class="border border-white  rounded materia"  id="ICCS253">DISEÑO<br> DIGITAL</td>
                  <td class="border border-white  rounded materia"  id="ICCS257">MINERÍA DE<br> DATOS</td>
                  <td class="border border-white  rounded materia"  id="ICCS261">ADMINISTRACIÓN<br> DE REDES</td>
                  <td class="border border-white  rounded materia"  id="ICCS262">INTERCOMUN.<br> Y SEGURIDAD<br>EN REDES</td>
                  <td class="border border-white"></td>
                </tr>

                <tr>
                  <td class="border border-white"></td>
                  <td class="border border-white  rounded materia"  id="ICCS003">ÁLGEBRA LINEAL<br> CON ELEMENTOS<br> EN GEO. AN.</td>
                  <td class="border border-white  rounded materia"  id="ICCS005">MATEMÁTICAS<br> DISCRETAS</td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                  <td class="border border-white  rounded materia"   id="ICCS256">BASES DE<br> DATOS PARA<br> INGENIERÍA</td>
                  <td class="border border-white  rounded materia"  id="ISCC201">ARQUITECTURA<br> DE COMP.</td>
                  <td class="border border-white"></td>
                  <td class="border border-white  rounded materia"  id="ISCC202">SISTEMAS<br> EMPOTRADOS</td>
                  <td class="border border-white"></td>
                </tr>

                <tr>
                  <td class="border border-white  rounded materia"  id="CCOS001">METODOLOGÍA<br> DE LA<br> PROGRAMACIÓN</td>
                  <td class="border border-white  rounded materia"  id="CCOS004">PROGRAMACIÓN<br> I</td>
                  <td class="border border-white  rounded materia"  id="CCOS010">PROGRAMACIÓN<br> II</td>
                  <td class="border border-white  rounded materia"  id="CCOS261">GRAFICACIÓN</td>
                  <td class="border border-white  rounded materia"  id="CCOS252">SISTEMAS<br> OPERATIVOS I</td>
                  <td class="border border-white  rounded materia"  id="CCOS254">SISTEMAS<br> OPERATIVOS II</td>
                  <td class="border border-white"></td>
                  <td class="border border-white  rounded materia" id="ICCS255">TÉCNICAS DE<br> INTELIGENCIA<br> ARTIFICIAL</td>
                  <td class="border border-white  rounded materia"  id=""></td>
                  <td class="border border-white  rounded materia"  id="">OPTATIVA<br> DESIT<br> (Complementaria)</td>
                </tr>

                <tr>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                  <td class="border border-white  rounded materia"  id="CCOS005">ENSAMBLADOR</td>
                  <td class="border border-white  rounded materia"  id="CCOS013">ESTRUCTURAS<br> DE DATOS</td>
                  <td class="border border-white  rounded materia"  id="ISCO201">ANÁLISIS Y<br> DISEÑO DE<br>ALGORITMOS</td>
                  <td class="border border-white  rounded materia"  id="IDDS001">ADMINITRACIÓN<br> DE PROYECTOS</td>
                  <td class="border border-white  rounded materia"  id="ICCS251">PROGRAMACIÓN<br> CONCURRENTE Y<br> PARALELA</td>
                  <td class="border border-white  rounded materia"  id="ICCS252">PROGRAMACIÓN<br> DISTRIBUIDA<br> APLICADA</td>
                  <td class="border border-white  rounded materia"  id="SSCC100">SERVICIO<br> SOCIAL<br></td>
                  <td class="border border-white  rounded materia"  id="PPCc101">PRÁCTICA<br> PROFESIONAL</td>
                </tr>

                <tr>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                  <td class="border border-white  rounded materia"  id="ISCO200">INGENIERÍA<br> DE SOFTWARE</td>
                  <td class="border border-white"></td>
                  <td class="border border-white  rounded materia"  id="ICCS258">DESARROLLO DE<br> APLICACIONES<br>WEB</td>
                  <td class="border border-white  rounded materia" id="IDCC202">DESARROLLO DE<br> APLICACIONES<br>MÓVILES</td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                </tr>

                <tr>
                  <td class="border border-white   rounded materia"  id="FGUS004">LENGUA<br> EXTRANJERA I</td>
                  <td class="border border-white  rounded materia"  id="FGUS005">LENGUA<br> EXTRANJERA II</td>
                  <td class="border border-white  rounded materia"  id="FGUS006">LENGUA<br> EXTRANJERA III</td>
                  <td class="border border-white  rounded materia"  id="FGUS007">LENGUA<br> EXTRANJERA VI</td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                  <td class="border border-white  rounded materia"  id="">OPTATIVA I</td>
                  <td class="border border-white  rounded materia"  id="">OPTATIVA II</td>
                  <td class="border border-white  rounded materia"  id="IDDS002">PROYECTO<br> I + D I</td>
                </tr>
                <tr>
                  <td class="border border-white  rounded materia"  id="FGUS001">FORMACIÓN<br> HUMANA Y<br> SOCIAL</td>
                  <td class="border border-white  rounded materia"  id="FGUS002">DHCP</td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                  <td class="border border-white"></td>
                </tr>
        </tbody>


      </table>
    </div>
      @include('alumno.modal_materia')
</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
  $('.buttonModal').hide();
  $('.materia').css('cursor','Pointer');

 $.ajax({
   url:"{{ url('/ColorMapaGrafico') }}",
   type: "get",
   dataType: "json",
   success: function(materia){

     // SE PONE DE COLOR DE ACUERDO AL STATUS DE CADA MATERIA
      for(var i=0 ; i < materia.length ; i++ ){
          $('#'+materia[i].id_materia).val(materia[i].status);
          if(materia[i].status == 0){ // MATERIA NO DISPONIBLE
            $('#'+materia[i].id_materia).addClass('bg-light');
          }else if(materia[i].status == 1){//MATERIA DISPONIBLE
                  $('#'+materia[i].id_materia).addClass('bg-warning');
                }else if(materia[i].status == 2){ // CURSANDO
                         $('#'+materia[i].id_materia).addClass('bg-success');
                       }else if(materia[i].status == 3){ //materia APROBADA
                              $('#'+materia[i].id_materia).addClass('bg-primary');
                            }else{
                                 $('#'+materia[i].id_materia).addClass('bg-danger');
                            }
        }

        // FIN


        $('.materia').click(function(){

            var nombre_materia = $(this).text();
            var estatus = $(this).val();
            var id_materia = $(this).attr('id');

            $('input[type="radio"]').prop('checked', false);
            $('.no_disponible').hide();
            $('.disponible').hide();
            $('.cursando').hide();
            $('.aprobada').hide();
            $('.reprobada').hide();
            $('#materia').hide();
            $('#Calificacion').hide();
            $('.Aceptar').show();
            $('.Cancelar').show();
            $("input[name='cursar']").attr('checked',false);

            $('.modal-title').text(nombre_materia);
            $('#materia').val(id_materia);


            if(estatus == 0){   //  Materia no disponible
              $('.no_disponible').show();  // se muestra el div con contenido de materia no disponible
              $('.Aceptar').hide();   // escondemos el boton de aceptar
              $('.Cancelar').hide();  // encondemos el boton de Cancelar
            }else if(estatus == 1){   // si la materia esta disponible
              $('.disponible').show(); // mostramos un formulario
            }else if (estatus == 2){   //si la materia la esta cursando se muestra un formulario
              $('.cursando').show();

              $("input[name=aprobar]").click(function(){  // depende del radio button si aprobo la materia pedira la calificacion
                var val = $(this).val();        // si no aprobo la materia no pedira calificacion
                if(val == 1){
                 $('#Calificacion').show();
               }else{
                  $('#Calificacion').hide();
               }
              });

            }else if (estatus == 3){  // si  la materia esta aprobada se mostrara su calificacion y numero de intentos
                for (var i = 0; i<71;i++){
                  if(materia[i].id_materia == id_materia){
                    $('#aprobada_calificacion').text(materia[i].calificacion);
                    $('#aprobada_intentos').text(materia[i].veces_cursada);
                    break;
                  }
                }
                $('.Aceptar').hide();
                $('.Cancelar').hide();
              $('.aprobada').show();
            }else if (estatus == 4){  // si la materia esta reprobada se muestra un formulario para ver si quiere tomar o no la materia
             $('.reprobada').show();
             }
            $('.buttonModal').click();   // damos click al boton para que aparezca la ventana modal
         });
   }
  });

});
</script>

@endsection
