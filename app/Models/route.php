<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class route extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'route_name',
        'start_location',
        'end_location',
        'distance',
    ];

    public function buses()
    {
        return $this->belongsToMany(Bus::class, 'bus_route')
                    ->withPivot('departure_time', 'arrival_time', 'fare')
                    ->withTimestamps();
    }
}
