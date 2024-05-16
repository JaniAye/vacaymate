<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pick extends Model
{
    use HasFactory;
    protected $fillable = [
        'location',
        'hotel',
        'vehicle',
        'guide',
        'package',
        'user_id'
    ];
}