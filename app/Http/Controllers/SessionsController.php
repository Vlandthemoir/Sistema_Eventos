<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;



class SessionsController extends Controller
{

  public function create(){
    return view('auth.login');
  }
  public function store(LoginRequest $request){
    $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
            //dd('error');
            $user = Auth::getProvider()->retrieveByCredentials($credentials);
            auth()->login($user);
            return redirect('/home');
           //return 'error';
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);


        //Auth::login($user);
        //auth()->login($user);
        //return redirect('/home');
        return $this->authenticated($request, $user);
  }

  protected function authenticated(Request $request, $user)
    {
        return redirect('/home');
    }
  public function destroy(){
    auth()->logout();
    return redirect()->to('/');
  }
}
