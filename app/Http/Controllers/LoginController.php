<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
  public function create(){
    return view('auth.login');
  }
  public function store(LoginRequest $request){
    $credenciales = $request->getCredentials();
    //obtengo los datos que el usuario ingresa en el login
    //correo
    $correo = request()->only('correo');
    //contraseña
    $contraseña = request()->only('contraseña');
    //realizo la comprobacion en la base de datos mediante una consulta del query builder
    $usuario = DB::table('usuarios')
                ->select('correo','contraseña')
                ->where('correo', '=', $correo)
                ->where('contraseña', '=', $contraseña)
                ->count();
    if($usuario == 1){
      //hago uso del LoginRequest para traer las credenciales
      //valido las credenciales despues de saber que son validas
      $sesion = Auth::getProvider()->retrieveByCredentials($credenciales);
      auth()->login($sesion);
      return redirect('/home');
    }else{
      return 'error';
    }
  }
  public function destroy(){
    auth()->logout();
    return redirect()->to('/');
  }
}
