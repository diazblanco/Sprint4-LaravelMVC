<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function index(){ //¿?
        return view('home');
        //return 'Bienvenido a la página de inicio';
    }

    public function create(){
        return view('partido/create');
        //return "Formulario nuevo partido";
    }
    
    public function show($partido){
        return view('home');
        //return "Bienvenido al partido $partido";
    }

    public function update(){
        return view('partido/update');
        //return "Formulario actualizar equipo $partido";
    }
}
