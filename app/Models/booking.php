<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'from',
        'to',
        'booking_date',
        'bus_id',
        'category',
        'special_request',
    ];
    public function bus(): void
    {
        $this->belongsTo(Bus::class, 'bus_id', 'id');
    }
}
