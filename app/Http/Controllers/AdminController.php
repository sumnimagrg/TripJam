<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\route;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalBus = Bus::count();
        $totalRoutes = route::count();
        return view('admin.index', compact('totalBus', 'totalRoutes'));
    }
}
