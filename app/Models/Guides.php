<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guides extends Model
{
    use HasFactory;
    protected $fillable = [
        'guide_name',
        'location',
        'discription',
        'isTranslator',
        'is_eng',
        'is_spanish',
        'is_Russ',
        'is_jpn',
        'is_chn',
        'reviews'
    ];
}
