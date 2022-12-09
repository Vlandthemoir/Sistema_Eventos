<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;
use App\Models\Foto;

class PaquetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $datos = Paquete::orderBy('id', 'desc')->paginate(10);
	    return view('admin.Paquetes.view', compact('datos'));
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
    $paquetes = new Paquete();
		$paquetes->nombre = $request->post('nombre');
		$paquetes->descripcion = $request->post('descripcion');
		$paquetes->precio = $request->post('precio');
		$paquetes->save();
		return redirect()->route("paquetes.index");
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
      $paquetes = Paquete::findOrFail($id);
      return view("admin.Paquetes.update" , compact('paquetes'));
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
      $paquetes = Paquete::find($id);
  		$paquetes->nombre = $request->input('nombre');
  		$paquetes->descripcion = $request->input('descripcion');
  		$paquetes->precio = $request->input('precio');
  		$paquetes->save();
  		return redirect()->route("paquetes.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $paquetes = Paquete::find($id);
    	$paquetes->delete();
    	return redirect()->route("paquetes.index");
    }
}
