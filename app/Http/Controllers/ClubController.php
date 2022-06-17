<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Team;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /* public function index(){ 
        return view('club/index');
    } */

    public function create(){
        return view('club.create');
    }

    public function store(Request $request){
        $club = new Club();
        
        $club->name = $request->name;
        $club->location = $request->location;
        $club->color = $request->color;
        $club->save();

        return redirect()->route('home');
    }
    
    public function show($id){
        $club = Club::find($id);
        $teams = Team::all();
        return view('club.show', compact("club"), compact('teams'));    
    }

    public function edit(Club $club){
        return view('club.edit', compact("club"));
    }

    public function update(Request $request, Club $club){
        $club->name = $request->name;
        $club->location = $request->location;
        $club->color = $request->color;
        $club->save();
        return redirect()->route('home');
    }
    
    public function destroy(Club $club){
        $club->delete();
        return redirect()->route('home');
    }
}
