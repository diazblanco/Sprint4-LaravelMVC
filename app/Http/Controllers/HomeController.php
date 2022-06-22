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
        $matches = Matche::all();
        return view('home', compact('clubs'), compact('matches'));
    }
}