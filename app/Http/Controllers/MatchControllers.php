<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Matche;
use App\Models\Team;
use Illuminate\Http\Request;

class MatchControllers extends Controller
{
    public function create(){
        $teams = Team::all();
        return view('partido.create', compact("teams"));
    }
    public function store(Request $request){
        $request->validate([
            'match_date'=>'required|date|after:yesterday',
            'match_time'=>'required',
            'category'=>'required',
            'team_id_local'=>'required',
            'team_id_visiting'=>'required|different:team_id_local',
        ]);
        $match = new Matche();
        $match->match_date = $request->match_date;
        $match->match_time = $request->match_time;
        $match->category = $request->category;
        $match->team_id_local = $request->team_id_local;
        $match->team_id_visiting = $request->team_id_visiting;
        $match->local_goals = $request->local_goals;
        $match->visiting_goals = $request->visiting_goals;
        $match->save();
        return redirect()->route('home');
    }
    public function edit(Matche $match){
        $teams = Team::all();
        $matches = Matche::all();
        return view('partido.edit', compact("match"), compact("teams"), compact("matches"));
    }
    public function update(Request $request, Matche $match){
        $request->validate([
            'match_date'=>'required|date|after:yesterday',
            'match_time'=>'required',
            'category'=>'required',
            'team_id_local'=>'required',
            'team_id_visiting'=>'required|different:team_id_local',
        ]);
        $match->match_date = $request->match_date;
        $match->match_time = $request->match_time;
        $match->category = $request->category;
        $match->team_id_local = $request->team_id_local;
        $match->team_id_visiting = $request->team_id_visiting;
        $match->local_goals = $request->local_goals;
        $match->visiting_goals = $request->visiting_goals;
        $match->save();
        return redirect()->route('home');
    }
    public function destroy(Matche $match){
        $match->delete();
        return redirect()->route('home');
        //return view('home');
    }
}
