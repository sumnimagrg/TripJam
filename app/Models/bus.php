<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = [
        'bus_no',
        'capacity',
        'type',
        'image',
        'description',
        'busName'
    ];

    public function routes()
    {
        return $this->belongsToMany(route::class, 'bus_routes')
            ->withPivot('departure_time', 'arrival_time', 'fare')
            ->withTimestamps();
    }

    public function driver()
    {
        return $this->hasOne(Driver::class);
    }
}
