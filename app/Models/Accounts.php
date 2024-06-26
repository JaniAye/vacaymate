<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nic',
        'base_img',
        'email',
        'password',
        'status',
        'type',
        'country'
    ];
}
