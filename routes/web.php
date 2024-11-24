<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AmusementParkTicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// middleware
Route::middleware('auth')->group(function () {
    // Show the add ticket form
    Route::get('/add', function () {
        return view('auth.add');
    })->name('add');
    Route::post('/add', [TicketController::class, 'store'])->name('add');
    // Handle logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});




// Route::get('/amusement', [AmusementParkTicketController::class, 'create'])->name('amusement_park_tickets.create');
// Route::post('/amusement', [AmusementParkTicketController::class, 'store'])->name('amusement_park_tickets.store');

// Show registration form
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Handle registration
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', function () {
    return view('auth.login');
});

// Handle login
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/tickets/{id}/invoice', [TicketController::class, 'generateInvoice'])->name('invoice');