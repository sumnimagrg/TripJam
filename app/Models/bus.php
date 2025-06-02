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
        'fare',
        'image',
        'description',
        'busName',
        'route_id'
    ];

    public function routes()
    {
        return $this->belongsToMany(Route::class, 'bus_routes')->withPivot('fare');
    }


    public function driver()
    {
        return $this->hasOne(Driver::class);
    }
}
