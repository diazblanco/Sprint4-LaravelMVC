<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index(){ 
        return view('club/index');
        //return 'Bienvenido a la página de inicio';
    }

    public function create(){
        return view('club.create');
        //return "Formulario nuevo club";
    }
    
    public function show($club){ //¿? Necesito controlador para mostrar los clubs en la home? o los muestro por queries?
        return view('club.show', ['club' => $club]);
        //return "Bienvenido al club $club";
    }

    public function update(){
        return view('club/update');
        //return "Formulario actualizar club $club";
    }
    
    public function delete($club){
        return "Formulario actualizar club $club";
    }
}
