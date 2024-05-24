<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('consultas',[ModuloController::class,'consultasElokuent']);