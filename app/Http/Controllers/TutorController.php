<?php

namespace App\Http\Controllers;
use App\User;
use App\Grupo;
use App\Tutor;
use App\Alumno;
use App\Materia;
use App\Alumno_Materia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Imports\ImportarAlumnos;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;


class TutorController extends Controller{


    public function __construct(){
    $this->middleware(['auth','role:tutor']);
    }

    public function index(){
          return view("tutor.grupos");
    }

    public function perfil(){
          return view("tutor.perfil");
    }

    public function CargarDocumento(Request $request){

      $nombre_archivo=$request->seccion.'_'.$request->periodo.'_'.$request->carrera.'_'.auth()->user()->matricula.'.xlsx';
      $ppath = $request->file('excel')->storeAs('public',$nombre_archivo);
       //hacemos una importacion
       $alumnos = Excel::toCollection(new ImportarAlumnos,'../storage/app/public/'.$nombre_archivo);
       return $alumnos;
    }

    public function agregarGrupo(Request $request){

        // Guardamos el archivo en storage/public
        $nombre_archivo=$request->seccion.'_'.$request->periodo.'_'.$request->carrera.'_'.auth()->user()->matricula.'.xlsx';
        $ppath = $request->file('excel')->storeAs('public',$nombre_archivo);
        //hacemos una importacion
        $array = Excel::toCollection(new ImportarAlumnos,'../storage/app/public/'.$nombre_archivo);
        $array=$array[0];
        //borramos el archivo
        Storage::delete($ppath);

        //ingresamos datos en la base de datos
        //Creamos el grupo
         $tutor = Tutor::where('matricula',auth()->user()->matricula)->get();
        // return $tutor[0]->id_tutor;
         $grupo = new Grupo;
         $grupo->generacion = $request->periodo;
         $grupo->seccion = $request->seccion;
         $grupo->id_licenciatura = $request->licenciatura;
         $grupo->id_tutor = $tutor[0]->id_tutor;
         $grupo->save();
        //
        // //obtenemos el id_grupo del grupo creado
           $grupo = Grupo::where('generacion',$request->periodo)->where('seccion',$request->seccion)->where('id_licenciatura',$request->licenciatura)->get();
         // creamos las cuentas de los alumnos

        // //tabla user
          foreach ($array as $alumno ) {
            if($alumno[0] != null){
              $user = new User;
              $user->matricula = $alumno[0];
              $user->password = bcrypt($alumno[0]);
              $user->rol = 'alumno';
              $user->save();
              }
          }

        // // tabla Alumnos
          foreach ($array as $alumno) {
              if($alumno[0] != null){
                $new_alumno = new Alumno;
                $new_alumno->nombre = $alumno[1];
                $new_alumno->apellido_paterno = $alumno[2];
                $new_alumno->apellido_materno = $alumno[3];
                $new_alumno->correo = '';
                $new_alumno->promedio_general = 0;
                $new_alumno->Porcentaje = 0;
                $new_alumno->matricula = $alumno[0];
                $new_alumno->id_grupo =  $grupo[0]->id_grupo;
                $new_alumno->save();
              }
          }

        // //obtenemos las materias que se cargaran al alumno
         $materias = Materia::where('id_licenciatura',$request->licenciatura)->get();
         // Cargamos a cada alumno sus materias
          foreach ($array as $alumno ) {
                  if($alumno[0] != null){
                      $id_alumno = Alumno::where('matricula',$alumno[0])->get();
                        foreach ($materias as $materia ) {
                            $alumno_materia = new Alumno_Materia;
                            $alumno_materia->id_alumno = $id_alumno[0]->id_alumno;
                            $alumno_materia->id_materia = $materia->id_materia;
                            $alumno_materia->status = 0;
                            $alumno_materia->calificacion = 0;
                            $alumno_materia->veces_cursada = 0;
                            $alumno_materia->save();
                            }

                            $alumno_materia = Alumno_Materia::where('id_alumno',$id_alumno[0]->id_alumno)->where('id_materia','APWEB')->get();
                            $alumno_materia[0]->status = 1;
                            $alumno_materia[0]->save();

                            $alumno_materia = Alumno_Materia::where('id_alumno',$id_alumno[0]->id_alumno)->where('id_materia','CCOS001')->get();
                            $alumno_materia[0]->status = 1;
                            $alumno_materia[0]->save();

                            $alumno_materia = Alumno_Materia::where('id_alumno',$id_alumno[0]->id_alumno)->where('id_materia','CCOS003')->get();
                            $alumno_materia[0]->status = 1;
                            $alumno_materia[0]->save();

                            $alumno_materia = Alumno_Materia::where('id_alumno',$id_alumno[0]->id_alumno)->where('id_materia','FGUS001')->get();
                            $alumno_materia[0]->status = 1;
                            $alumno_materia[0]->save();

                            $alumno_materia = Alumno_Materia::where('id_alumno',$id_alumno[0]->id_alumno)->where('id_materia','FGUS002')->get();
                            $alumno_materia[0]->status = 1;
                            $alumno_materia[0]->save();

                            $alumno_materia = Alumno_Materia::where('id_alumno',$id_alumno[0]->id_alumno)->where('id_materia','FGUS004')->get();
                            $alumno_materia[0]->status = 1;
                            $alumno_materia[0]->save();

                            $alumno_materia = Alumno_Materia::where('id_alumno',$id_alumno[0]->id_alumno)->where('id_materia','ICCS001')->get();
                            $alumno_materia[0]->status = 1;
                            $alumno_materia[0]->save();

                        }
          }



     return redirect()->back();
    }


    public function verAlumnos($seccion,$generacion,$carrera,$tutor){
      $grupo = Grupo::where('seccion',$seccion)->where('generacion', $generacion)->where('id_licenciatura', $carrera)->where('id_tutor', $tutor)->get();
      $Alumnos = Alumno::where('id_grupo', $grupo[0]->id_grupo)->get();
      return view('tutor.ver_alumnos', [
        'Alumnos' => $Alumnos,
      ] );
    }
}
