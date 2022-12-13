<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Foto;
use App\Models\Paquete;
use App\Models\Servicio;
class FotosController extends Controller
{

  public function index_paquetes($id){
    $datos_paquete = Paquete::findOrFail($id);
    $datos_foto = DB::table('fotos')
                ->select('id','id_categoria','url','id_usuario','nombre','descripcion','tipo')
                ->where('id_categoria', '=', $id)
                ->where('categoria', '=', 'Paquete')
                ->get();

    return view('admin.Paquetes.images' , compact('datos_paquete','datos_foto'));
  }
  public function store_paquetes(Request $request){
    $url_destino = 'images/fotos/';//establesco el destino
    $nombre = $request->post('nombre');
    //guardo las fotos y los datos de esta
    $foto = new Foto();
		$foto->id_categoria = $request->post('id_paquete');
    $foto->id_usuario = auth()->user()->id;
    $foto->nombre = $nombre;
    $foto->descripcion = $request->post('descripcion');
    //se mueve el archivo a la carpeta destino
    $subirFoto = $request->file('foto')->move($url_destino,$nombre);
    //guardo la ulr en la que se almaceno
    $foto->url = $url_destino . $nombre;//concateno la url + el nombre para generar el url de la foto
    $foto->categoria = 'Paquete';
    $foto->tipo = $request->post('tipo');
    $foto->save();
    return redirect()->route("paquetes.img",$request->post('id_paquete'));
  }
  public function delete_paquetes($id){
    /*$id_paquete = DB::table('fotos')
                ->select('id_paquete')
                ->where('id', '=', $id)
                ->get();*/

    $foto = Foto::find($id);
    $foto->delete();
    return redirect()->route('paquetes.index');
    //return redirect()->route("paquetes.img",$id->id_paquete);
    //return redirect()->route("paquetes.img",$id_paquete->post('id_paquete'));
  }

  public function index_servicios($id){
    $datos_servicio = Servicio::findOrFail($id);
    $datos_foto = DB::table('fotos')
                ->select('id','id_categoria','url','id_usuario','nombre','descripcion','tipo')
                ->where('id_categoria', '=', $id)
                ->where('categoria', '=', 'Servicio')
                ->get();
    return view('admin.Servicios.images' , compact('datos_servicio','datos_foto'));
  }
  public function store_servicios(Request $request){
    $url_destino = 'images/fotos/';//establesco el destino
    $nombre = $request->post('nombre');
    //guardo las fotos y los datos de esta
    $foto = new Foto();
		$foto->id_categoria = $request->post('id_paquete');
    $foto->id_usuario = auth()->user()->id;
    $foto->nombre = $nombre;
    $foto->descripcion = $request->post('descripcion');
    //se mueve el archivo a la carpeta destino
    $subirFoto = $request->file('foto')->move($url_destino,$nombre);
    //guardo la ulr en la que se almaceno
    $foto->url = $url_destino . $nombre;//concateno la url + el nombre para generar el url de la foto
    $foto->categoria = 'Servicio';
    $foto->tipo = $request->post('tipo');
    $foto->save();
    return redirect()->route("servicios.img",$request->post('id_paquete'));
  }
  public function delete_servicios($id){
    /*$id_paquete = DB::table('fotos')
                ->select('id_paquete')
                ->where('id', '=', $id)
                ->get();*/

    $foto = Foto::find($id);
    $foto->delete();
    return redirect()->route('servicios.index');
    //return redirect()->route("paquetes.img",$id->id_paquete);
    //return redirect()->route("paquetes.img",$id_paquete->post('id_paquete'));
  }
}
