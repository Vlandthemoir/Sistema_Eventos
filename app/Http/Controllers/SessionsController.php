<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
  public function create(){
    return view('auth.login');
  }
  public function store(){

    /*$credentials = $request->validate([
      'name' => ['required', 'name'],
      'password' => ['required'],
]     );

      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
      }*/

        return redirect()->to('/home');
  }
  public function destroy(){
    auth()->logout();
    return redirect()->to('/');
  }
}
