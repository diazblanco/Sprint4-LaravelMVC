<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
        public function create(Club $club){
        return view('equipo.create', compact("club"));
    }
    public function store(Request $request){
        $team = new Team();
        $team->name = $request->name;
        $team->category = $request->category;
        $team->club_id = $request->club_id;
        $team->save();
        $id = $request->club_id;
        return redirect()->route('clubs.show', compact("id"));
    }
    public function edit(Team $team){
        return view('equipo.edit', compact("team"));
    }
    public function update(Request $request, Team $team){
        $team->name = $request->name;
        $team->category = $request->category;
        $team->club_id = $request->club_id;
        $team->save();
        $id = $request->club_id;
        return redirect()->route('clubs.show', compact("id"));
    }
    public function destroy(Team $team){
        $team->delete();
        $id = $team->club_id;
        return redirect()->route('clubs.show', compact("id"));
    }
}
