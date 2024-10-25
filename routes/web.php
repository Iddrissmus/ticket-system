<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AmusementParkTicketController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ticket', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/ticket', [TicketController::class, 'store'])->name('tickets.store');


Route::get('/amusement', [AmusementParkTicketController::class, 'create'])->name('amusement_park_tickets.create');
Route::post('/amusement', [AmusementParkTicketController::class, 'store'])->name('amusement_park_tickets.store');