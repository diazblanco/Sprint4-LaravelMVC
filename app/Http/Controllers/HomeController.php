<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        $clubs = Club::all();

        return view('home', compact('clubs'));
    }
}
