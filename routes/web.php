<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController ;
use App\Http\Controllers\EvenementSportifController ;

Route::get('/',HomeController::class)->name('home') ; 
Route::get('eventsportif/{eventSportif}', [EvenementSportifController::class, 'show'])->name('eventSportif.show');
