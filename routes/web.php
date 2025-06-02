<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusRoutesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\RouteController;
use App\Models\Bus;
use App\Models\route as BusRoute;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', [HomeController::class, 'index']);

Route::get('/aboutus', function () {
    return view('TripJam/aboutus');
});

Route::get('/booked', function () {
    $buses = Bus::with('routes')->get();
    $routes = BusRoute::all();
    return view('TripJam.BookBlank', compact('buses', 'routes'));
})->name('book.general');


// Services Route
Route::get('/services', [HomeController::class, 'service']);

Route::get('/book-bus/{id}', [BookingController::class, 'book'])->name('book.bus');
Route::get('/book/{id}', [BookingController::class, 'bookBus'])->name('booking.form');
Route::post('/book-bus/{id}', [BookingController::class, 'submitBooking'])->name('booking.submit')->middleware('auth');
Route::post('/bookings/payment', [BookingController::class, 'payment'])->name('bookings.payment');
Route::get('/book/{id}', [BookingController::class, 'book'])->name('booking.book');
Route::get('/esewa/check', [PaymentController::class, 'check'])->name('esewa.check');
Route::get('/payment-success', function () {
    return view('payment.success');
})->name('payment.success');
Route::get('/payment-failed', function () {
    return view('payment.failure');
})->name('payment.failure');
Route::get('/payment/booking/{booking_id}', [BookingController::class, 'payment'])->name('payment.booking')->middleware('auth');



Route::get('/receipt/download/{id}', [PaymentController::class, 'downloadReceipt'])->name('receipt.download');
// seach
Route::get('/bus/search', [BusController::class, 'search'])->name('bus.search');



// Contact Routes
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard']);
    Route::get('/admin/bookings', [AdminController::class, 'showBookings'])->name('admin.bookings');


    Route::resource('/file', FileController::class);
    Route::resource('/bus', BusController::class);
    Route::resource('/route', RouteController::class);
    Route::resource('/busRoute', BusRoutesController::class);
    Route::resource('/driver', DriverController::class);
});

// Admin Pages
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.index');

Route::get('/admin/customer', [CustomerController::class, 'index'])->name('customer.index');


Route::get('/admin/pages/buses', function () {
    return view('admin.pages.buses');
})->name('admin.buses');

Route::get('/admin/pages/routes', function () {
    return view('admin.pages.routes');
})->name('admin.routes');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'sendEnquiry'])->name('contact.sendEnquiry');


require __DIR__ . '/auth.php';
