<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Bus;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        // $bookings = Booking::all();
        $buses = Bus::findOrFail($id);
        return view('TripJam.Book', compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'from' => 'required|string',
            'to' => 'required|string',
            'booking_date' => 'required|date',
            'bus_id' => 'required|exists:buses,id',
            'seat_id' => 'required|exists:seats,id',
            'category' => 'required|string',
            'special_request' => 'nullable|string',
        ]);
        // Create a new booking
        Booking::create($request->all());

        // Redirect back with a success message
        return redirect()->route('bookings.index')->with('success', 'Booking successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(booking $booking)
    {
     //  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, booking $booking)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'from' => 'required|string',
            'to' => 'required|string',
            'booking_date' => 'required|date',
            'bus_id' => 'required|exists:buses,id',
            'seat_id' => 'required|exists:seats,id',
            'category' => 'required|string',
            'special_request' => 'nullable|string',
        ]);
        $booking->update($request->all());

        // Redirect back with a success message
        return redirect()->route('booking.index')->with('success', 'Booking successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(booking $booking)
    {
        //
        $booking->delete();

        // Redirect back with a success message
        return redirect()->route('booking.index')->with('success', 'Booking successfully deleted.');
    }
}
