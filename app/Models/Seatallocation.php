<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seatallocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'seat_setup_id',
        'trip_id',
        'user_id',
    ];
}
