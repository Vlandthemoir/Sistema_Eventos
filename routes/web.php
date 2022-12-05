<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnonimoController;



Route::get('/', function () {
    return view('bienvenido');
});

Route::get('home',[AnonimoController::class,'index'])
->name('home');
