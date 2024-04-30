<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedGuides extends Model
{
    use HasFactory;
    protected $fillable = [
        'pkg_id',
        'guide_id'
    ];
}
