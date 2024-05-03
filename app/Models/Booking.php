<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'cust_id',
        'pkg_id',
        'agancy_id',
        'status',
        'type',
        'st_date',
        'end_date',
        'price',
        'comments'
    ];
}
