<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class LoginController extends Controller{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


public function __construct(){

        $this->middleware('guest',['only'=>'ShowLoginForm','except' => 'Logout']);

}


public function login(Request $request){

       $credentials= $request->validate(['matricula' => 'required|max:15|string','password' => 'required|min:6',]);
       $credentials = $request->only('matricula','password');

        if(Auth::attempt($credentials)){

          if((auth()->user()->rol)=="alumno"){
              return redirect()->route('Alumno');
             }else if((auth()->user()->rol)=="tutor"){
                      return redirect()->route('Tutor_Grupos');
                    }else if((auth()->user()->rol)=='administrador'){
                            return redirect()->route('Admin_Tutores');
                            }

        }
        return back()->withInput(request(['matricula']));
        }




        public function ShowLoginForm(){
                    return view('login');
        }



        public function Logout(){
            Auth::logout();
            return redirect('/');
        }




}
