<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Matche extends Model
{
    //protected $table = "nombreTabla"; //Si el modelo no sigue la convención de llamarse como la migración nombrada con el mismo nombre pero en plural, le especificamos a qué tabla/migración debe apuntar
    use HasFactory;

    //relación uno a muchos inversa entre partido y equipo
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
