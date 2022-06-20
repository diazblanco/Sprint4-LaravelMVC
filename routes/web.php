<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\TeamController;

//INDEX
Route::get('/', HomeController::class)->name('home');

//CLUBS
Route::controller(ClubController::class)->group(function(){ 
    Route::get('clubs/create', 'create')->name('clubs.create');
    Route::post('clubs', 'store')->name('clubs.store');
    Route::get('clubs/{id}', 'show')->name('clubs.show'); 
    Route::get('clubs/{club}/edit', 'edit')->name('clubs.edit');
    Route::put('clubs/{club}', 'update')->name('clubs.update');
    Route::delete('clubs/{club}', 'destroy')->name('clubs.destroy');
});

//EQUIPOS
Route::controller(TeamController::class)->group(function(){
    Route::get('equips/{club}/create', 'create')->name('equips.create');
    Route::post('equips', 'store')->name('equips.store'); //Route::post('equips/{club}', 'storeTeam')->name('equips.storeTeam');
    Route::get('equips/{team}/edit', 'edit')->name('equips.edit');
    Route::put('equips/{team}', 'update')->name('equips.update');
    Route::delete('equips/{team}', 'destroy')->name('equips.destroy');
});



/////////////////////////////////////
/////////////////////////////////////

?>