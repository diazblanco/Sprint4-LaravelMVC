<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
class Club extends Model
{
    use HasFactory;

    //Relación uno a muchos entre club y equipos
    public function teams(){
        return $this->hasMany(Team::class);
    }


}
