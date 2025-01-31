<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    use HasFactory;

    protected $fillable=[
        'bus_no',
        'capacity',
        'type'
    ];
    public function seats():void{
        $this->hasMany(seat::class,'bus_id','id');
    }
}
