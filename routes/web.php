<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClubController;

//INDEX
Route::get('/', HomeController::class)->name('home');

Route::controller(ClubController::class)->group(function(){

//CLUBS
    Route::get('clubs/create', 'create')->name('clubs.create');
    Route::post('clubs', 'store')->name('clubs.store');
    Route::get('clubs/{id}', 'show')->name('clubs.show'); 
    Route::get('clubs/{club}/edit', 'edit')->name('clubs.edit');
    Route::put('clubs/{club}', 'update')->name('clubs.update');
    Route::delete('clubs/{club}', 'destroy')->name('clubs.destroy');

    //EQUIPOS
    Route::get('equips/{club}/createTeam', 'createTeam')->name('equips.createTeam');
    Route::post('equips', 'storeTeam')->name('equips.storeTeam'); //Route::post('equips/{club}', 'storeTeam')->name('equips.storeTeam');
    Route::get('equips/{team}/edit', 'editTeam')->name('equips.editTeam');
    Route::put('equips/{team}', 'updateTeam')->name('equips.updateTeam');
    Route::delete('equips/{team}', 'destroyTeam')->name('equips.destroyTeam');
    
    /////////////////////////////////////

});
?>