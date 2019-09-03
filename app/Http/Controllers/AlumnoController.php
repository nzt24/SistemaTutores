<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Alumno;
use App\User;
use App\Grupo;
use App\Carrera;
use App\Alumno_Materia;


class AlumnoController extends Controller{

    public function __construct(){
    $this->middleware(['auth','role:alumno']);
    }

    public function index(){
      return view("alumno.inicio");
    }

    public function perfil(){
        return view("alumno.perfil");
    }

    public function mapaGrafico(){
      $Alumno = Alumno::where('matricula',auth()->user()->matricula)->get();
      $Grupo = Grupo::where('id_grupo',$Alumno[0]->id_grupo)->get();
      $Carrera = Carrera::where('id_licenciatura',$Grupo[0]->id_licenciatura)->get();

      if($Carrera[0]->id_licenciatura == 1){
        return view('alumno.mapa_grafico');
      }else('Perteneces a una carrera difernte a ICC');
    }

    public function ColorMapaGrafico(){

      $Alumno = Alumno::where('matricula',auth()->user()->matricula)->get();
      $Materias = Alumno_Materia::where('id_alumno',$Alumno[0]->id_alumno)->get();
      return $Materias;
    }



    public function avance(){
      $Alumno = Alumno::where('matricula',auth()->user()->matricula)->get();
      $Grupo = Grupo::where('id_grupo',$Alumno[0]->id_grupo)->get();
      $Carrera = Carrera::where('id_licenciatura',$Grupo[0]->id_licenciatura)->get();
      return view('alumno.avance', [
          'Alumno' => $Alumno[0],
          'Carrera' => $Carrera[0],
        ] );

    }


      public function updatePerfil(Request $request){

      $Alumno = Alumno::where('matricula',auth()->user()->matricula)->get();
      $User = User::where('matricula',auth()->user()->matricula)->get();
      $Alumno[0]->correo = $request->correo;
      $Alumno[0]->save();

      // if($request->password1 != null && $request->password2 != null ){
      //     if($request->password1 == $request->password2){
      //       $User[0]->password = bcrypt($request->password1);
      //       $User[0]->save();
      //     }
      // }

          return redirect()->back();
    }

    public function updateMateria(Request $request){

    $Alumno = Alumno::where('matricula',auth()->user()->matricula)->get();
    $Alumno_materia = Alumno_Materia::where('id_Alumno',$Alumno[0]->id_alumno)->where('id_materia',$request->materia)->get();

    if($request->cursar == '1'){
        $Alumno_materia[0]->status = 2;
        $Alumno_materia[0]->veces_cursada = $Alumno_materia[0]->veces_cursada +1;
    }else if ($request->aprobar == '1'){
        $Alumno_materia[0]->status = 3;
        $Alumno_materia[0]->calificacion = $request->Calificacion;
    }else if ($request->aprobar == '0'){
        $Alumno_materia[0]->status = 4;
    }else if ($request->reprobada_cursar == '1'){
        $Alumno_materia[0]->status = 2;
        $Alumno_materia[0]->veces_cursada = $Alumno_materia[0]->veces_cursada +1;
    }else if ($request->reprobada_cursar == '0'){
          $Alumno_materia[0]->status = 4;
    }
      $Alumno_materia[0]->save();
      return redirect()->back();
    }


}
