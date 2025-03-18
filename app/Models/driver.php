<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bus_id',
        'license_no',
        'experience',
        'image',
    ];

    // Define One-to-One Relationship with Bus
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
}
