<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'booking_id',
        'transaction_code',
        'payment',
        'status',
        'method',
        'payment_date',
    ];

    protected $casts = [
        'payment_date' => 'datetime',
    ];
    /**
     * Relationship: Payment belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship: Payment belongs to a booking.
     */
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
