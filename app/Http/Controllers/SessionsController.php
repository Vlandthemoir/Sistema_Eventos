<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
  public function create(){
    return view('auth.login');
  }
  public function store(){
    //obtencion de sus datos
    $credentials = request()->only('nombre','contrasena');
    //validacion de los datos
    
  }
  public function destroy(){
    auth()->logout();
    return redirect()->to('/');
  }
}
