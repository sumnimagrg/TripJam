<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'booking_date',
        'seats_booked',
        'bus_id',
        'fare',
        'message',
        'status'
    ];
    public function bus()
    {
        return $this->belongsTo(Bus::class, 'bus_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
