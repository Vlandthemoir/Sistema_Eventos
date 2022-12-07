<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class RegistroController extends Controller
{
	public function create(){
		return view('auth.register');
	}
	public function store(Request $request){

		$this->validate(request(), [
		'nombre' => 'required',
		'correo' => 'required',
		'contraseña' => 'required',
		]);

		$user = User::create(request(['nombre','correo','contraseña']));

		return redirect()->to('/');
	}
}
