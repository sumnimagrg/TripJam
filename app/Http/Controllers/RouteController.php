<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routes = Route::all();
        return view('admin.pages.Route.index', compact('routes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::all();
        return view('admin.pages.Route.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'route_name' => 'required',
            'start_location' => 'required',
            'end_location' => 'required',
            'distance' => 'required',
        ]);

        $route = new Route;
        $route->route_name = $request->route_name;
        $route->start_location = $request->start_location;
        $route->end_location = $request->end_location;
        $route->distance = $request->distance;
        $route->save();
        return redirect()->route('route.index')->with('message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $route = route::query()->where('id', $id)->get()->first();
        return view('admin.Pages.Route.view', data: compact('route'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::all(); // Retrieve all images for selection in the edit view
        $route = route::query()->where('id', $id)->get()->first();
        return view('admin.Pages.Route.edit', compact('route', 'files'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'route_name' => 'required',
            'start_location' => 'required',
            'end_location' => 'required',
            'distance' => 'required',
        ]);

        $route = new Route;
        $route = $route->where('id', $id)->get()->first();

        $route->route_name = $request->route_name;
        $route->start_location = $request->start_location;
        $route->end_location = $request->end_location;
        $route->distance = $request->distance;

        $route->update();
        return redirect()->route('route.index')->with('message', 'Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $route = route::query()->where('id', $id)->get()->first();

        $route->delete();
        return redirect('admin/route')->with('message', 'Deleted Successfully');
    }
}
