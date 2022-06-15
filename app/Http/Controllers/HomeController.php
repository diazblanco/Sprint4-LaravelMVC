<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        $clubs = Club::all(); //Si quiero paginar: $clubs = Club::paginate();
        return view('home', compact('clubs'));
    }
}
