<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatSetup extends Model
{
    use HasFactory;

    public function trips(){
        return $this->belongsTo(Trip::class);
    }
   protected $fillable = ['trip_id', 'seat_no','status', ];
}
