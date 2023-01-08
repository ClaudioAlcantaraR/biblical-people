<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Show all biographies. Definimos un name para usar la ruta
Route::get('/listings', [ListingController::class, 'index'])->name('listings.index');

// Show create biography
Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create');

// Store listing data
Route::post('/listings', [ListingController::class, 'store']);

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('listings.edit');

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Show dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Show Search Page
Route::get('/search', function () {
    return view('search');
})->middleware(['auth', 'verified'])->name('search');

// Account
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Show single biography
Route::get('/listings/{listing}', [ListingController::class, 'show']);

require __DIR__.'/auth.php';