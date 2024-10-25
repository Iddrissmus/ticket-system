<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ticket', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/ticket', [TicketController::class, 'store'])->name('tickets.store');
