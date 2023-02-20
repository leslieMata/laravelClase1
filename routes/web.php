<?php

use App\Http\Controllers\EstudioController;
use App\Http\Controllers\Paginas;
use Illuminate\Support\Facades\Route;

Route::get("/",  [Paginas::class, "index"]);
Route::get("/contacto",  [Paginas::class, "contacto"]);
Route::get("/estudio",  [EstudioController::class, "index"]);
