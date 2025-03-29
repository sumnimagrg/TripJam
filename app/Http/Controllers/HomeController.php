<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Driver;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        $tryBus = Bus::all();
        return view('TripJam.index', compact('tryBus', 'drivers'));
    }
    public function service()
    {
        $buses = Bus::all();
        return view('TripJam.services', compact('buses'));
    }
}
