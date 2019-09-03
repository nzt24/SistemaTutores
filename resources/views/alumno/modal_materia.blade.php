<!-- Button trigger modal -->
<button type="button" class="btn btn-primary buttonModal" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>


<!-- Modal -->
<div class="modal fade mimodal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <form class="" action="{{route('ActualizarMateria')}}" method="post">
      <div class="modal-header">
        <h6 class="modal-title" id="Title"></h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                 @csrf

                <div class="no_disponible">
                  Esta materia no se encuentra disponible.
                </div>

                <div class="disponible">
                <span>¿Deseas cursar estar materia?</span><br>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="cursar" id="cursar" value="1" >Si<br>
                <input class="form-check-input" type="radio" name="cursar" id="cursar" value="0" >No<br>
                </div>
                </div>

                <div class="cursando">
                  <span>¿Aprobaste la Materia?</span><br>
                  <div class="form-check">
                  <input class="form-check-input" type="radio" name="aprobar" id="aprobar" value="1">Si<br>
                  <input class="form-check-input" type="radio" name="aprobar" id="aprobar" value="0" >No<br>
                  </div>
                  <input type="text" name="Calificacion" id="Calificacion" class="form-control" placeholder="Calificacion">
                </div>

                <div class="aprobada">
                  <h6 class="text-primary">Materia Aprobada</h6>
                <span class="text-secondary">Calificación: <span id="aprobada_calificacion"></span></span><br>
                <span class="text-secondary">Intentos: <span id="aprobada_intentos"></span></span>

                </div>

                <div class="reprobada">
                  <span>¿Deseas cursar estar materia?</span><br>
                  <div class="form-check">
                  <input class="form-check-input" type="radio" name="reprobada_cursar" id="reprobada_cursar" value="1">Si<br>
                  <input class="form-check-input" type="radio" name="reprobada_cursar" id="reprobada_cursar" value="0">No<br>
                  </div>

                </div>

      </div>
      <div class="modal-footer">
        <input type="text" id="materia" name="materia" value="">
        <button type="button" class="btn btn-secondary Cancelar" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary Aceptar">Aceptar </button>
      </div>
  </form>
    </div>
  </div>
</div>
