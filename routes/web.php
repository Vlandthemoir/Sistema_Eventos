 <?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnonimoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PaquetesController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\FotosController;

Route::get('/', function () {

    return view('bienvenido');

});

Route::get('/home', function () {
    return view('home');
});

//ruta para el usuario anonimo
Route::get('/anonimo-paquete',[AnonimoController::class,'index'])
->middleware('guest')
->name('anonimo.paquete');

//rutas para el inicio de sesion
Route::get('/login',[LoginController::class,'create'])
->middleware('guest')
	->name('login.index');
Route::post('/login',[LoginController::class,'store'])
->middleware('guest')
	->name('login.store');
Route::get('/logout',[LoginController::class,'destroy'])
->middleware('auth')
	->name('login.destroy');

//rutas para el registro de los clientes
Route::get('/register',[RegistroController::class,'create'])
//->middleware('auth')
->name('register.index');
Route::post('/register',[RegistroController::class,'store'])
//->middleware('auth')
->name('register.store');

//rutas para el registro de los otros usuarios
Route::get('/register-usuarios', [UsuariosController::class, 'index'])
->name('usuarios.index');
Route::get('/edit-usuarios/{id}', [UsuariosController::class, 'edit'])
->name('usuarios.edit');
Route::put('/update-usuarios/{id}', [UsuariosController::class, 'update'])
->name('usuarios.update');
Route::post('/create-usuarios', [UsuariosController::class, 'store'])
->name('usuarios.store');
Route::delete('/destroy-usuarios/{id}', [UsuariosController::class, 'destroy'])
->name('usuarios.destroy');

//rutas para los paquetes
Route::get('/register-paquetes', [PaquetesController::class, 'index'])
->middleware('auth')
->name('paquetes.index');
Route::get('/edit-paquetes/{id}', [PaquetesController::class, 'edit'])
->middleware('auth')
->name('paquetes.edit');
Route::put('/update-paquetes/{id}', [PaquetesController::class, 'update'])
->middleware('auth')
->name('paquetes.update');
Route::post('/create-paquetes', [PaquetesController::class, 'store'])
->middleware('auth')
->name('paquetes.store');
Route::delete('/destroy-paquetes/{id}', [PaquetesController::class, 'destroy'])
->middleware('auth')
->name('paquetes.destroy');
//rutas para las imagenes de los paquetes
Route::get('/img-paquetes/{id}', [FotosController::class, 'index_paquetes'])
->middleware('auth')
->name('paquetes.img');
Route::post('/storeimg-paquetes', [FotosController::class, 'store_paquetes'])
->middleware('auth')
->name('paquetes.storeimg');
Route::delete('/deleteimg-paquetes/{id}', [FotosController::class, 'delete_paquetes'])
->middleware('auth')
->name('paquetes.deleteimg');

//rutas para los servicios
Route::get('/register-servicios', [ServiciosController::class, 'index'])
->middleware('auth')
->name('servicios.index');
Route::get('/edit-servicios/{id}', [ServiciosController::class, 'edit'])
->middleware('auth')
->name('servicios.edit');
Route::put('/update-servicios/{id}', [ServiciosController::class, 'update'])
->middleware('auth')
->name('servicios.update');
Route::post('/create-servicios', [ServiciosController::class, 'store'])
->middleware('auth')
->name('servicios.store');
Route::delete('/destroy-servicios/{id}', [ServiciosController::class, 'destroy'])
->middleware('auth')
->name('servicios.destroy');
//rutas para las imagenes de los servicios
Route::get('/img-servicios/{id}', [FotosController::class, 'index_servicios'])
->name('servicios.img');
Route::post('/storeimg-servicios', [FotosController::class, 'store_servicios'])
->name('servicios.storeimg');
Route::delete('/deleteimg-servicios/{id}', [FotosController::class, 'delete_servicios'])
->name('servicios.deleteimg');
