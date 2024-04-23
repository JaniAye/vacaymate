<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleControler extends Controller
{
    public function saveVehicle(Request $request)
    {

        $request->validate([
            'vehicle_no' => 'required',
            'model' => 'required',
            'discription' => 'required',
            'type' => 'required',
            'is_ac' => 'required',
            'is_adjustable_seat' => 'required',
            'is_power_shutter' => 'required',
            'reviews' => 'required'
        ]);
        $isExsistloc = Vehicle::where('vehicle_no', $request->vehicleNo)
            ->get();

        if (count($isExsistloc) > 0) {
            return response()->json([
                'success' => true,
                'message' => 'Already Have'
            ], 200);
        }
        Vehicle::create([
            'vehicle_no' => $request->vehicleNo,
            'model' => $request->model,
            'discription' => $request->discription,
            'type' => $request->type,
            'is_ac' => $request->is_ac,
            'is_adjustable_seat' => $request->isAdjustableSeat,
            'is_power_shutter' => $request->isPowerShutter,
            'reviews' => $request->reviews
        ]);


        return response()->json([
            'success' => true,
            'message' => 'Location Created'
        ], 201);
    }
}
