<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    use HasFactory;
    protected $fillable = [
        'hotel_name',
        'location',
        'discription',
        'type',
        'is_breakfast',
        'is_lunch',
        'is_dinner',
        'is_pool_access',
        'reviews'
    ];
}
