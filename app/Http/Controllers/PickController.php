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

            if ($request->location) {
                if (empty($existingPick->location)) {
                    $location = $request->location;
                } else {
                    $location = $existingPick->location . "," . $request->location;
                }
            }

            if ($request->hotel) {

                if (empty($existingPick->hotel)) {

                    $hotel = $request->hotel;
                } else {

                    $hotel = $existingPick->hotel . "," . $request->hotel;
                }
            }

            if ($request->vehicle) {
                if (empty($existingPick->vehicle)) {
                    $vehicle = $request->vehicle;
                } else {
                    $vehicle = $existingPick->vehicle . "," . $request->vehicle;
                }
            }

            if ($request->guide) {
                if (empty($existingPick->guide)) {
                    $guide = $request->guide;
                } else {
                    $guide = $existingPick->guide . "," . $request->guide;
                }
            }

            if ($request->package) {
                if (empty($existingPick->package)) {
                    $package =  $request->package;
                } else {
                    $package = $existingPick->package . "," . $request->package;
                }
            }
            $existingPick->update([
                'location' => $location ?? $existingPick->location,
                'hotel' => $hotel ?? $existingPick->hotel,
                'vehicle' => $vehicle ?? $existingPick->vehicle,
                'guide' => $guide ?? $existingPick->guide,
                'package' => $package ?? $existingPick->package
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
