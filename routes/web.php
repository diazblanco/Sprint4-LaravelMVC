<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeagueController;

//INDEX
Route::get('/', HomeController::class)->name('home');

Route::controller(LeagueController::class)->group(function(){

//CLUBS
    Route::get('clubs/create', 'create')->name('clubs.create');
    Route::post('clubs', 'store')->name('clubs.store');
    Route::get('clubs/{id}', 'show')->name('clubs.show'); 
    Route::get('clubs/{club}/edit', 'edit')->name('clubs.edit');
    Route::put('clubs/{club}', 'update')->name('clubs.update');
    Route::delete('clubs/{club}', 'destroy')->name('clubs.destroy');

    //EQUIPOS
    /////////////////////////////////////
    Route::get('equips/{club}/createTeam', 'createTeam')->name('equips.createTeam');
    Route::post('equips', 'storeTeam')->name('equips.storeTeam'); //Route::post('equips/{club}', 'storeTeam')->name('equips.storeTeam');
    Route::get('equips/{team}/edit', 'editTeam')->name('equips.editTeam');
    Route::put('equips/{team}', 'updateTeam')->name('equips.updateTeam');
    Route::delete('equips/{team}', 'destroyTeam')->name('equips.destroyTeam');


});

//EQUIPOS
/* 
    
    Route::post('equipos', 'store')->name('equipos.store');
    Route::get('equipos/{id}', 'show')->name('equipos.show');
    Route::get('equipos/{team}/edit', 'edit')->name('equipos.edit');
    Route::put('equipos/{team}', 'update')->name('equipos.update');
    Route::delete('equipos/{team}', 'destroy')->name('equipos.destroy');
}); */


//PARTIDOS
/* Route::controller(PartidoController::class)->group(function(){
    Route::get('partidos', 'index');
    Route::get('partidos/create', 'create');
    Route::get('partidos/update', 'update');
    Route::get('partidos/{partido}', 'show');
}); */




?>