<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buses = Bus::all();
        return view('admin.pages.Bus.index', compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::all();
        return view('admin.pages.Bus.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bus_no' => 'string|max:100|min:1|required',
            'capacity' => 'required',
            'type' => 'required',
            'fare' => 'required',
            'image' => 'required|string',
            'description' => 'required|string',
            'busName' => 'required|string'
        ]);

        $bus = new Bus;
        $bus->bus_no = $request->bus_no;
        $bus->capacity = $request->capacity;
        $bus->type = $request->type;
        $bus->fare = $request->fare;
        $bus->image = $request->image;
        $bus->description = $request->description;
        $bus->busName = $request->busName;
        $bus->save();
        return redirect()->route('bus.index')->with('message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bus = bus::query()->where('id', $id)->get()->first();
        return view('admin.Pages.Bus.view', data: compact('bus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::all(); // Retrieve all images for selection in the edit view
        $bus = bus::query()->where('id', $id)->get()->first();
        return view('admin.Pages.Bus.edit', compact('bus', 'files'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bus_no' => 'string|max:100|min:1|required',
            'capacity' => 'required',
            'type' => 'required',
            'fare' => 'required',
            'image' => 'required|string',
            'description' => 'required|string',
            'busName' => 'required|string'
        ]);

        $bus = new Bus;
        $bus = $bus->where('id', $id)->get()->first();
        $bus->bus_no = $request->bus_no;
        $bus->capacity = $request->capacity;
        $bus->type = $request->type;
        $bus->fare = $request->fare;
        $bus->image = $request->image;
        $bus->description = $request->description;
        $bus->busName = $request->busName;
        $bus->update();
        return redirect('bus.index')->with('message', 'Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bus = bus::query()->where('id', $id)->get()->first();

        $bus->delete();
        return redirect('admin/bus')->with('message', 'Deleted Successfully');
    }

    public function search(Request $request)
    {
        $query = Bus::query()->with('routes');

        if ($request->filled('type')) {
            $query->where('type', 'LIKE', '%' . $request->type . '%');
        }

        if ($request->filled('bus_name')) {
            $query->where('busName', 'LIKE', '%' . $request->bus_name . '%');
        }

        if ($request->filled('min_capacity')) {
            $query->where('capacity', '>=', $request->min_capacity);
        }

        if ($request->filled('max_capacity')) {
            $query->where('capacity', '<=', $request->max_capacity);
        }

        if ($request->filled('min_price')) {
            $query->where('fare', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('fare', '<=', $request->max_price);
        }

        if ($request->filled('route_name')) {
            $query->whereHas('routes', function ($q) use ($request) {
                $q->where('route_name', 'LIKE', '%' . $request->route_name . '%');
            });
        }


        $buses = $query->get();

        return view('TripJam.search-results', compact('buses'));
    }
}
