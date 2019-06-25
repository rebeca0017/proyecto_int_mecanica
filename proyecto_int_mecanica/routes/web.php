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

Route::get('/placas','MecanicaController@placas');
Route::post('/usuarios','MecanicaController@usuarios');
Route::get('/horario/citas','MecanicaController@citasDisponibles')→name('citas');
Route::get('/mantenimiento','MecanicaController@mantenimiento')→name('citas');

