<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('admin.Usuarios.view')
      $datos = User::orderBy('id', 'desc')->paginate(10);
	    return view('admin.Usuarios.view', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $user = new User();
		$user->name = $request->input('name');
		$user->email = $request->input('email');
		$user->password = $request->input('password');
		$user->rol = $request->input('rol');
		$user->save();
		return redirect()->route("usuarios.index");
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
      $user = User::findOrFail($id);
      return view("admin.Usuarios.update" , compact('user'));
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
  $user = User::find($id);
	$user->name = $request->input('name');
	$user->email = $request->input('email');
  $user->password = $request->input('password');
  $user->rol = $request->input('rol');
	$user->save();
	return redirect()->route("usuarios.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
  $user = User::find($id);
	$user->delete();
	return redirect()->route("usuarios.index");
    }
}
