<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function saveHotel(Request $request)
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

        // $isExsistVehicle = Vehicle::where('vehicle_no', $request->vehicleNo)
        //     ->get();

        // if (count($isExsistVehicle) > 0) {
        //     return response()->json([
        //         'success' => true,
        //         'message' => 'Already Registerd Vehicle'
        //     ], 200);
        // }
        Hotels::create([
            'hotel_name' => $request->hotelName,
            'location' => $request->hotelCity,
            'discription' => $request->hotelDiscription,
            'type' => $request->hotelType,
            'is_breakfast' => (int) $request->isBreakfast,
            'is_lunch' => (int) $request->isLunch,
            'is_dinner' => (int)  $request->isDinner,
            'is_pool_access' => 1,
            'reviews' => $request->reviews
        ]);


        return response()->json([
            'success' => true,
            'message' => 'New Hotel Added'
        ], 201);
    }
}
