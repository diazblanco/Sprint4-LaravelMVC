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
Route::get('/', HomeController::class)->name('home');

//CLUBS
Route::controller(ClubController::class)->group(function(){
    Route::get('clubs', 'index')->name('clubs.index'); //No la utilizo. La vista dnd se muestran los clubs es la home
    Route::get('clubs/create', 'create')->name('clubs.create');
    Route::get('clubs/update', 'update')->name('clubs.update');
    Route::get('clubs/{id}', 'show')->name('clubs.show');
});

//EQUIPOS
Route::controller(EquipoController::class)->group(function(){
    Route::get('equipos', 'index');
    Route::get('equipos/create', 'create');
    Route::get('equipos/update', 'update');
    Route::get('equipos/{equipo}', 'show');
});


//PARTIDOS
Route::controller(PartidoController::class)->group(function(){
    Route::get('partidos', 'index');
    Route::get('partidos/create', 'create');
    Route::get('partidos/update', 'update');
    Route::get('partidos/{partido}', 'show');
});

/* Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso $curso, de la categoria $categoria";
    } else {
        return "Bienvenido al curso $curso";
    }
}); */



?>