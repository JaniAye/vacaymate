<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleControler extends Controller
{
    public function saveVehicle(Request $request)
    {

        // $request->validate([
        //     'vehicleNo' => 'required',
        //     'model' => 'required',
        //     'discription' => 'required',
        //     'type' => 'required',
        //     'is_ac' => 'required',
        //     'is_adjustable_seat' => 'required',
        //     'is_power_shutter' => 'required',
        //     'reviews' => 'required'
        // ]);

        $isExsistVehicle = Vehicle::where('vehicle_no', $request->vehicleNo)
            ->get();

        if (count($isExsistVehicle) > 0) {
            return response()->json([
                'success' => true,
                'message' => 'Already Registerd Vehicle'
            ], 200);
        }
        Vehicle::create([
            'vehicle_no' => $request->vehicleNo,
            'model' => $request->model,
            'discription' => $request->discription,
            'type' => $request->type,
            'is_ac' => (int) $request->is_ac,
            'is_adjustable_seat' => (int) $request->isAdjustableSeat,
            'is_power_shutter' => (int)  $request->isPowerShutter,
            'reviews' => $request->reviews
        ]);


        return response()->json([
            'success' => true,
            'message' => 'New Vehicle Added'
        ], 201);
    }

    public function getAllVehicles($vehicleName)
    {
        try {
            $allVehicles = Vehicle::where('vehicle_no', 'like', $vehicleName . '%')
                ->orderBy('created_at', 'desc')
                ->get();

            if ($allVehicles->isNotEmpty()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Success',
                    'data' => $allVehicles
                ], 200);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => 'Invalid location',
                    'data' => []
                ], 200);
            }
        } catch (\Exception $e) {
            info($e->getMessage());
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
    public function getVehiclesAllData()
    {
        try {
            $allVehicles = Vehicle::all();

            if ($allVehicles->isNotEmpty()) {

                return response()->json([
                    'success' => true,
                    'message' => 'Success',
                    'data' => $allVehicles
                ], 200);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => 'No packages',
                    'data' => []
                ], 200);
            }
        } catch (\Exception $e) {
            info($e->getMessage());
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
    public function showVehicleDetails(Request $request)
    {
        $vehicleNo = $request->query('no', 0);

        return view('vehicle-details', ['vehicle' => $vehicleNo]);
    }
}
