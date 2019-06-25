<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MecanicaController extends Controller
{
public function placas(){
    return 'hola';
}
public function usuarios(){
    return 'juan';
}
public function citasDisponibles(){
    return 'lunes, martes, miercoles';
}
public function mantenimiento(){
    return 'correctivo,preventivo,normal';
}
}
