<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Team;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    //////////////// CLUB ////////////////
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
        //$teams = Team::all();
        $teams = Team::where('club_id', $club->id)->get();
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

    //////////////// EQUIPO ////////////////
    public function createTeam(Club $club){
        return view('equipo.create', compact("club"));
    }
    public function storeTeam(Request $request){
        $team = new Team();
        $team->name = $request->name;
        $team->category = $request->category;
        $team->club_id = $request->club_id;
        $team->save();
        return redirect()->route('home'); // poner vista en vez de route
    }
    public function editTeam(Team $team){
        return view('equipo.edit', compact("team"));
    }
    public function updateTeam(Request $request, Team $team){
        $team->name = $request->name;
        $team->category = $request->category;
        $team->club_id = $request->club_id;
        $team->save();
        return redirect()->route('home'); //redirect a club.show
    }
    public function destroyTeam(Team $team){
        $team->delete();
        return redirect()->route('home'); //redirect a club.show
    }
    /////////////////////////////////////
    /////////////////////////////////////
}

