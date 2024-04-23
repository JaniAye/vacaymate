<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicle_no',
        'model',
        'discription',
        'type',
        'is_ac',
        'is_adjustable_seat',
        'is_power_shutter',
        'reviews'
    ];
}
