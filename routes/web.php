<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administracion;
use App\Http\Controllers\regmaterias;
use App\Http\Controllers\civil;
use App\Http\Controllers\materia;
use App\Http\Controllers\modmateria;
use App\Http\Controllers\regestudiante;
use App\Http\Controllers\listadomat;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [Administracion::class, 'index']) ;

Route::get('/regmaterias/regmaterias', [regmaterias::class, 'index']) ;
Route::get('/listadomat/listadomat', [listadomat::class, 'index']) ;
Route::get('/modmateria/modmateria', [modmateria::class, 'index']) ;
Route::get('/regestudiante/regestudiante', [regestudiante::class, 'index']) ;