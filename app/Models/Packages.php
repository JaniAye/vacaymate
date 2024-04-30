<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_name',
        'agancy_id',
        'discription',
        'person_count',
        'day_count',
        'airport_pickup',
        'airport_drop',
        'free_guide',
        'ultimate_service',
        'price',
        'type',
        'status'
    ];
}
