<?php

namespace App\Http\Controllers;

use App\Models\Pick;
use Illuminate\Http\Request;

class PickController extends Controller
{
    public function savePick(Request $request)
    {
        $existingPick = Pick::where('user_id', $request->userId)->first();

        if ($existingPick) {

            $location = $existingPick->location . "," . $request->location;
            $hotel = $existingPick->hotel . "," . $request->hotel;
            $vehicle = $existingPick->vehicle . "," . $request->vehicle;
            $guide = $existingPick->guide . "," . $request->guide;
            $package = $existingPick->package . "," . $request->package;

            $existingPick->update([
                'location' => $location,
                'hotel' => $hotel,
                'vehicle' => $vehicle,
                'guide' => $guide,
                'package' => $package
            ]);
        } else {
            Pick::create([
                'location' => $request->location,
                'hotel' => $request->hotel,
                'vehicle' => $request->vehicle,
                'guide' => $request->guide,
                'package' => $request->package,
                'user_id' => $request->userId
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => $existingPick ? 'Pick Updated' : 'New Pick Added'
        ], 201);
    }
}
