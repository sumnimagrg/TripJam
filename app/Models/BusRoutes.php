<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusRoutes extends Model
{
    protected $fillable = [
        'bus_id',
        'route_id',
        'departure_time',
        'arrival_time',
        'fare'
    ];

    public function bus()
    {
        return $this->belongsTo(Bus::class, 'bus_id', 'id');
    }

    public function route()
    {
        return $this->belongsTo(Route::class, 'route_id', 'id');
    }
}
