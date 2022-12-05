<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnonimoController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return view('bienvenido');
});

Route::get('home',[AnonimoController::class,'index'])
->name('home');

//rutas login
Route::get('/login',[SessionsController::class,'create'])
	->name('login.index');
Route::post('/login',[SessionsController::class,'store'])
	->name('login.store');
Route::get('/logout',[SessionsController::class,'destroy'])
	->name('login.destroy');


//rutas para el registro de los clientes
Route::get('/register',[RegistroController::class,'create'])
->name('register.index');
Route::post('/register',[RegistroController::class,'store'])
->name('register.store');

//rutas para el resto de clientes
Route::get('/register-usuarios', [UsuariosController::class, 'index'])
->name('usuarios.index');
Route::get('/edit-usuarios/{id}', [UsuariosController::class, 'edit'])
->name('usuarios.edit');
Route::put('/update-usuarios/{id}', [UsuariosController::class, 'update'])
->name('usuarios.update');
Route::post('/create-usuarios', [UsuariosController::class, 'store'])
->name('usuarios.store');
Route::delete('/destroy/{id}', [UsuariosController::class, 'destroy'])
->name('usuarios.destroy');
