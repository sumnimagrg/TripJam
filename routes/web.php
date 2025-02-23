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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard']);
});

Route::get('/admin/index', function () {
    return view('admin.index'); // Dashboard is outside 'pages' folder
})->name('admin.index');


Route::get('/admin/pages/buses', function () {
    return view('admin.pages.buses');
})->name('admin.buses');

Route::get('/admin/pages/seats', function() {
    return view('admin.pages.seats');
})->name('admin.seats');

Route::get('/admin/pages/routes', function() {
    return view('admin.pages.routes');
})->name('admin.routes');

Route::get('/admin/pages/customers', function() {
    return view('admin.pages.customers');
})->name('admin.customers');

require __DIR__ . '/auth.php';
