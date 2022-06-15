<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /* public function index(){ 
        return view('club/index');
    } */

    public function create(){
        return view('club.create');
    }
    
    public function show($id){
        $club = Club::find($id);
        return view('club.show', compact("club"));    
    }

    public function update(){
        return view('club/update');
    }
    
    public function delete($club){
        return "Formulario actualizar club $club";
    }
}
