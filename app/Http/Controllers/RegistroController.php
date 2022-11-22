<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;
class RegistroController extends Controller
{
	public function create(){
		return view('auth.register');
	}
	public function store(){
		$this->validate(request(),[
			'nombre'=>'required',
			'correo'=>'required|correo',
			'contrasena'=>'required|confirmed',
		]);
		$usuario = Usuario::create(request(['nombre','correo','contrasena']));
		auth()->login($usuario);
		return redirect()->to('/');
	}
}
