 <?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnonimoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PaquetesController;

Route::get('/', function () {
    return view('bienvenido');
});

Route::get('home',[AnonimoController::class,'index'])
->name('home');

//rutas para el inicio de sesion
Route::get('/login',[LoginController::class,'create'])
	->name('login.index');
Route::post('/login',[LoginController::class,'store'])
	->name('login.store');
Route::get('/logout',[LoginController::class,'destroy'])
	->name('login.destroy');

//rutas para el registro de los clientes
Route::get('/register',[RegistroController::class,'create'])
->name('register.index');
Route::post('/register',[RegistroController::class,'store'])
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

//rutas para el registro de paquetes
Route::get('/register-paquetes', [PaquetesController::class, 'index'])
->name('paquetes.index');
Route::get('/edit-paquetes/{id}', [PaquetesController::class, 'edit'])
->name('paquetes.edit');
Route::put('/update-paquetes/{id}', [PaquetesController::class, 'update'])
->name('paquetes.update');
Route::post('/create-paquetes', [PaquetesController::class, 'store'])
->name('paquetes.store');
Route::delete('/destroy-paquetes/{id}', [PaquetesController::class, 'destroy'])
->name('paquetes.destroy');
