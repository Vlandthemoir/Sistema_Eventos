<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Models\Usuario;
use App\Models\User;
class RegistroController extends Controller
{
	public function create(){
		return view('auth.register');
	}
	public function store(Request $request){
		/*$usuario = new User();
		$usuario->name = $request->post('name');
		$usuario->email = $request->post('email');
		$usuario->password = $request->post('password');

		$usuario->save();
		return redirect()->to('/');
*/




		$this->validate(request(), [
		'name' => 'required',
		'email' => 'required|email',
		'password' => 'required|confirmed',
		]);

		$user = User::create(request(['name','email','password']));
		auth()->login($user);
		return redirect()->to('/');
	}
}
