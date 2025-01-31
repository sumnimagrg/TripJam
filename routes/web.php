<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('TripJam/index');
});

Route::get('/availability', function () {
    return view('TripJam/availability');
});

Route::get('/services', function () {
    return view('TripJam/services');
});
Route::get('/contact', function () {
    return view('TripJam/contact');
});
Route::get('/Book', function () {
    return view('TripJam/Book');
});


Route::resource('bookings', BookingController::class)->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
        Route::get('/admin/dashboard', [AdminController::class]);
});

require __DIR__ . '/auth.php';
