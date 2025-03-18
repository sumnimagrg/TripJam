<?php

namespace App\Http\Controllers;

use App\Models\bus;
use App\Models\File;
use App\Models\BusRoutes;
use App\Models\route;
use Illuminate\Http\Request;

class BusRoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bus = BusRoutes::with('bus')->get();
        $Route = BusRoutes::with('route')->get();
        return view('admin.pages.BusRoute.index', compact('bus', 'Route'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $files = File::all();
        $bus = bus::all();

        $route = route::all();

        return view('admin.pages.BusRoute.create', compact('files', 'bus', 'route'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'bus_id' => 'string|max:100|min:1|required',
            'route_id' => 'required',
            'departure_time' => '',
            'arrival_time' => '',
            'fare' => 'required'
        ]);

        $busRoute = new BusRoutes;
        $busRoute->bus_id = $request->bus_id;
        $busRoute->route_id = $request->route_id;
        $busRoute->departure_time = $request->departure_time;
        $busRoute->arrival_time = $request->arrival_time;
        $busRoute->fare = $request->fare;
        $busRoute->save();
        return redirect()->route('busRoute.index')->with('message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $busRoute = BusRoutes::query()->where('id', $id)->get()->first();
        return view('admin.Pages.BusRoute.view', data: compact('busRoute'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $files = File::all();
        // $bus = bus::all();
        // $route = route::all();
        $busRoute = BusRoutes::findOrFail($id);
        $route = route::all(['id', 'route_name']);
        $bus = bus::all(['id', 'bus_no']);
        return view('admin.pages.BusRoute.edit', compact('files', 'bus', 'route', 'busRoute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        
        $request->validate([
            'bus_id' => 'string|max:100|min:1|required',
            'route_id' => 'required',
            'departure_time' => '',
            'arrival_time' => '',
            'fare' => 'required'
        ]);

        $busRoute = new BusRoutes;
        $busRoute->bus_id = $request->bus_id;
        $busRoute->route_id = $request->route_id;
        $busRoute->departure_time = $request->departure_time;
        $busRoute->arrival_time = $request->arrival_time;
        $busRoute->fare = $request->fare;
        $busRoute->update();
        return redirect()->route('busRoute.index')->with('message', 'Edited Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $busRoute = BusRoutes::query()->where('id', $id)->get()->first();

        $busRoute->delete();
        return redirect('admin/busRoute')->with('message', 'Deleted Successfully');
    }
}
