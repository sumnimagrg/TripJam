<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seat extends Model
{
    use HasFactory;

    protected $fillable = [
        'seatNumber',
        'status',
        'bus_id'
    ];
    public function bus(): void
    {
        $this->belongsTo(Bus::class, 'bus_id', 'id');
    }
}
