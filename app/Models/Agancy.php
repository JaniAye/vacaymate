<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agancy extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'based_area',
        'services',
        'cover_image',
        'address',
        'reviews'
    ];
}
