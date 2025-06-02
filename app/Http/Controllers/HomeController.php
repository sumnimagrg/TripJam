<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Driver;

use App\Models\route;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        $tryBus = Bus::all();
        $types = Bus::select('type')->distinct()->pluck('type');
        $allRoutes = route::all();
        return view('TripJam.index', compact('tryBus', 'drivers', 'types', 'allRoutes'));
    }
    public function service()
    {
        $buses = Bus::all();
        return view('TripJam.services', compact('buses'));
    }
}
