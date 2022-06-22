<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Club;
use App\Models\Matche;


class Team extends Model
{
    use HasFactory;

    //relación uno a muchos inversa entre equipo y club
    public function club(){
        return $this->belongsTo(Club::class);
    }

    //realción uno a muchos entre equipo y partidos
    public function matches(){
        return $this->hasMany(Matche::class);
    }

    

}
