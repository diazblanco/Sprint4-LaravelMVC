<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index(){ //¿?
        return view('club/index');
        //return 'Bienvenido a la página del Club';
    }

    public function create(){
        return view('equipo/create');
        //return "Formulario nuevo equipo";
    }
    
    public function show($equipo){
        return view('equipo.show', compact('equipo'));
        //return "Bienvenido al equipo $equipo";
    }

    public function update(){
        return view('equipo/update');
        //return "Formulario actualizar equipo $equipo";
    }
    
    public function delete($equipo){
        return "Formulario actualizar equipo $equipo";
    }
}
