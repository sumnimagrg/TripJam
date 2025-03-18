<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;

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
Route::get('/payment', function () {
    return view('TripJam/Payment');
});

Route::get('\contact', [ContactController::class, 'show'])->name('contact.show');
Route::resource('bookings', BookingController::class)->middleware('auth');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard']);
});

require __DIR__ . '/auth.php';
