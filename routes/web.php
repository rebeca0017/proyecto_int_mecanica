<?php

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

Route::get('/placas','MecanicaController@Placas');
Route::post('/usuarios','MecanicaController@Usuarios');
Route::get('/horario/citas','MecanicaController@CitasDisponibles')→name('citas');

