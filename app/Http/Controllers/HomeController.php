<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Matche;
use App\Models\Team;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    public function __invoke(){
        $clubs = Club::all();
        $matches = Matche::
        join('teams', 'team_id_local', '=', 'teams.id')
        ->join('teams as teams_visiting', 'team_id_visiting', '=', 'teams_visiting.id')
        ->select(
            'matches.category as match_category',
            'matches.match_date as date_match',
            'matches.match_time as time_match',
            'matches.local_goals as goals_local',
            'matches.visiting_goals as goals_visiting',
            'teams.name as name_local',
            'teams_visiting.name as name_visiting',
            'matches.id as id_matches')

        /* 'teams.*', 'teams_visiting.*', */



        /* ->orderBy('matches.match_date', 'asc') */->get();
        /* var_dump($matches);
        exit(); */
        $edit = Matche::all();

        return view('home', ['matches'=>$matches, 'clubs'=>$clubs, 'edit'=>$edit]);
    ///////////////
    }
}