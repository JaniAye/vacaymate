<?php

namespace App\Http\Controllers;

use App\Models\Pick;
use Illuminate\Http\Request;

class PickController extends Controller
{
    public function savePick(Request $request)
    {

        Pick::create([
            'location' => $request->location,
            'hotel' => $request->hotel,
            'vehicle' => $request->vehicle,
            'guide' => $request->guide,
            'package' => $request->package
        ]);


        return response()->json([
            'success' => true,
            'message' => 'New Guide Added'
        ], 201);
    }
}
