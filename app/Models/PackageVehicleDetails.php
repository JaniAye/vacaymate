<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageVehicleDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicles_id',
        'agancy_id'
    ];
}
