<?php

namespace App\Http\Controllers;
use App\User;
use App\Tutor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdministradorController extends Controller{

    public function __construct(){
    $this->middleware(['auth','role:administrador']);
    }

    public function index(){
        return view("admin.tutores");
    }

    public function cuenta(){
        return view("admin.cuenta");
    }

    public function agregarTutor(Request $request){

      $user = new User;
      $tutor = new Tutor;

      $nombre=ucwords(strtolower($request->nombre));
      $paterno=ucwords(strtolower($request->paterno));
      $materno=ucwords(strtolower($request->materno));
      $num_trabajador=(int)$request->num_trabajador;


      $user->matricula=$num_trabajador;
      $user->password=bcrypt($num_trabajador);
      $user->rol='tutor';
      $user->save();

      $tutor->nombre=$nombre;
      $tutor->apellido_paterno=$paterno;
      $tutor->apellido_materno=$materno;
      $tutor->correo='';
      $tutor->horario_asesorias='';
      $tutor->cubiculo='';
      $tutor->matricula=$num_trabajador;
      $tutor->save();

      return redirect()->back();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
