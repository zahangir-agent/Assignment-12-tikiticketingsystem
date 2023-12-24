<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'trip_from',
        'trip_to',
        'tripdate',
        'fare',
        'coach_type',
        'departure_time',
        'arrival_time',
        'total_seat',
    ];
   
    

    public function availabletrips(){
        return $this->hasMany(SeatSetup::class);
    }
}
