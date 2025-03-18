<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusRoutesController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\BusController;
use App\Http\Controllers\RouteController;
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
    Route::resource('/file', FileController::class);
    Route::resource('/bus', BusController::class);
    Route::resource('/route', RouteController::class);
    Route::resource('/busRoute', BusRoutesController::class);
    Route::resource('/driver', DriverController::class);
});

Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index');


Route::get('/admin/pages/buses', function () {
    return view('admin.pages.buses');
})->name('admin.buses');


Route::get('/admin/pages/routes', function () {
    return view('admin.pages.routes');
})->name('admin.routes');


require __DIR__ . '/auth.php';
