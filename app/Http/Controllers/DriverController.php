<?php

namespace App\Http\Controllers;

use App\Models\bus;
use App\Models\BusRoutes;
use App\Models\driver;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bus = driver::with('bus')->get();
        $drivers = driver::all();
        return view('admin.pages.driver.index', compact('drivers', 'bus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $bus = bus::all();
        $files = File::all();
        return view('admin.pages.driver.create', compact('files', 'bus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'bus_id' => 'required|integer',
            'license_no' => 'required|string|max:50',
            'experience' => 'required|integer|min:0',
            'image' => 'required|string',
        ]);

        $driver = new Driver;

        $driver->name = $request->name;
        $driver->bus_id = $request->bus_id;
        $driver->license_no = $request->license_no;
        $driver->experience = $request->experience;
        $driver->image = $request->image;

        $driver->save();

        return redirect('/driver')->with('message', 'Driver added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $driver = driver::query()->where('id', $id)->get()->first();
        return view('admin.Pages.Driver.view', data: compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $bus = bus::all();
        $files = File::all();
        $driver = driver::query()->where('id', $id)->get()->first();
        return view('admin.pages.driver.edit', compact('driver', 'bus', 'files'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);

        $request->validate([
            'name' => 'required|string|max:255',
            'bus_id' => 'required|integer',
            'license_no' => 'required|string|max:50',
            'experience' => 'required|integer|min:0',
            'image' => 'required|string',
        ]);


        $driver = driver::query()->where('id', $id)->get()->first();
        $driver->name = $request->name;
        $driver->image = $request->image;
        $driver->bus_id = $request->bus_id;
        $driver->license_no = $request->license_no;
        $driver->experience = $request->experience;

        $driver->update();

        return redirect('/driver')->with('message', 'Driver edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $driver = driver::query()->where('id', $id)->get()->first();

        $driver->delete();
        return redirect('admin/driver')->with('message', 'Deleted Successfully');
    }
}
