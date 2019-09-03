<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Acceso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>

        @error('session_required')
         <div class="alert alert-info container text-primary mt-3 text-center col-7"  role="alert">{{$message}}</div>
         @endif
    <div class=" container col-9  col-sm-9 col-md-4   mx-auto pt-3">

        <div class="modal-content my-5 border border-primary rounded fondo_formulario ">

          <img src="{{ asset('img/logo_buap.png') }}" class="rounded mx-auto d-block mt-3 img-fluid rounded" width="100px"  alt="...">
          <div class="col-12 text-center mt-4">
            <h3>Acceso</h3>
          </div>

          <form class="mx-4 mb-5 mt-3" method="post" action="{{route('login')}}" >
            {{ method_field('POST') }}
             @csrf
            <div class="form-group">
              <input class="form-control @error('matricula')  is-invalid @enderror" type="text" name="matricula" placeholder="Matricula o Id-trabajador" value="{{ old('matricula')}}" >
              @error('matricula')
              <small id="matriculaHelp" class="form-text text-muted">{{$message}}</small>
              @enderror
              </div>

            <div class="form-group">
              <input  class="form-control @error('password') is-invalid @enderror" type="password" name="password" value="" placeholder="Contraseña" >
              @error('password')
              <small id="passwordHelp" class="form-text text-muted">{{$message}}</small>
              @enderror
            </div>

            <button  class=" btn btn-primary btn-block" name="button">Ingresar</button>

          </form>

        </div>
      </div>
  </body>
</html>
