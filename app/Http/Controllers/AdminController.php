<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Bus;
use App\Models\route;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalBookings = Booking::count();
        $totalBus = Bus::count();
        $totalRoutes = Route::count();
        $totalCustomers = User::count();

        $bookings = Booking::with('bus')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.index', compact(
            'totalBookings',
            'totalBus',
            'totalRoutes',
            'totalCustomers',
            'bookings'
        ));
    }
}
