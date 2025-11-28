<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;


Route::get('/', function(){ return view('welcome'); }); // atau home
Route::resource('reservations', ReservationController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/rooms', 'rooms');
Route::view('/foods', 'foods');
Route::view('/facility', 'facility');




Route::get('/', function () {
    return view('dashboard');
});

