<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PartidoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//INDEX
Route::get('/', HomeController::class);

//CLUBS
Route::controller(ClubController::class)->group(function(){
    Route::get('clubs', 'index');
    Route::get('clubs/create', 'create');
    Route::get('clubs/update', 'update');
    Route::get('clubs/{club}', 'show');
});

//EQUIPOS
Route::get('equipos', [EquipoController::class, 'index']);
Route::get('equipos/create', [EquipoController::class, 'create']);
Route::get('equipos/update', [EquipoController::class, 'update']);
Route::get('equipos/{equipo}', [EquipoController::class, 'show']);

//PARTIDOS
Route::get('partidos', [PartidoController::class, 'index']);
Route::get('partidos/create', [PartidoController::class, 'create']);
Route::get('partidos/update', [PartidoController::class, 'update']);
Route::get('partidos/{partido}', [PartidoController::class, 'show']);

/* Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso $curso, de la categoria $categoria";
    } else {
        return "Bienvenido al curso $curso";
    }
}); */



?>