<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeagueController;

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

Route::controller(LeagueController::class)->group(function(){

    //CLUBS
    Route::get('clubs/create', 'create')->name('clubs.create');
    Route::get('clubs/createTeam', 'createTeam')->name('clubs.createTeam');


    Route::post('clubs', 'store')->name('clubs.store');
    Route::get('clubs/{id}', 'show')->name('clubs.show');
    Route::get('clubs/{club}/edit', 'edit')->name('clubs.edit');
    Route::put('clubs/{club}', 'update')->name('clubs.update');
    Route::delete('clubs/{club}', 'destroy')->name('clubs.destroy');

    //EQUIPOS
    

});

//EQUIPOS
/* Route::controller(EquipoController::class)->group(function(){
    Route::get('equipos/create', 'create')->name('equipos.create');
    Route::post('equipos', 'store')->name('equipos.store');
    Route::get('equipos/{id}', 'show')->name('equipos.show');
    Route::get('equipos/{team}/edit', 'edit')->name('equipos.edit');
    Route::put('equipos/{team}', 'update')->name('equipos.update');
    Route::delete('equipos/{team}', 'destroy')->name('equipos.destroy');
    
    
    
    
    Route::get('equipos', 'index');
    Route::get('equipos/create', 'create');
    Route::get('equipos/update', 'update');
    Route::get('equipos/{equipo}', 'show');
}); */


//PARTIDOS
/* Route::controller(PartidoController::class)->group(function(){
    Route::get('partidos', 'index');
    Route::get('partidos/create', 'create');
    Route::get('partidos/update', 'update');
    Route::get('partidos/{partido}', 'show');
}); */




?>