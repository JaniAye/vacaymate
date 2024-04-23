<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function saveLocation(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'create_by' => 'nullable',
            'discription' => 'required',
            'city' => 'nullable',
            'reviews' => 'nullable'
        ]);
        $isExsistloc = Location::where('name', $request->name)
            ->get();

        if (count($isExsistloc) > 0) {
            return response()->json([
                'success' => true,
                'message' => 'Already Have'
            ], 200);
        }
        Location::create([
            'name' => $request->name,
            'create_by' => $request->created,
            'discription' => $request->discription,
            'city' => $request->city,
            'reviews' => $request->reviews
        ]);


        return response()->json([
            'success' => true,
            'message' => 'Location Created'
        ], 201);
    }
}
