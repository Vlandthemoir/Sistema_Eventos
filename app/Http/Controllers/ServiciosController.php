<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datos = Servicio::orderBy('id', 'desc')->paginate(100);
	    return view('admin.Servicios.view', compact('datos'));
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
      $servicio = new Servicio();
  		$servicio->nombre = $request->post('nombre');
  		$servicio->descripcion = $request->post('descripcion');
  		$servicio->precio = $request->post('precio');
  		$servicio->save();
      return redirect()->route("servicios.index");
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
      $servicios = Servicio::findOrFail($id);
      return view("admin.Servicios.update" , compact('servicios'));
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
      $servicio = Servicio::find($id);
  		$servicio->nombre = $request->input('nombre');
  		$servicio->descripcion = $request->input('descripcion');
  		$servicio->precio = $request->input('precio');
  		$servicio->save();
  		return redirect()->route("servicios.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //$foto = DB::table('fotos')->where('id_paquete', '=', $id)->delete();
      //elimino el paquete
      $servicio = Servicio::find($id);
    	$servicio->delete();
    }
}
