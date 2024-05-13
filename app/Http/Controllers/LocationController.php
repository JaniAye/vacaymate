<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\PackageLocations;
use Illuminate\Http\Request;
use Locale;

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
    public function getAllLocations($locationName)
    {
        try {
            $allLocations = Location::where('name', 'like', $locationName . '%')
                ->orderBy('created_at', 'desc')
                ->get();

            if ($allLocations->isNotEmpty()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Success',
                    'data' => $allLocations
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

    public function getLocationById($locationName)
    {
        try {
            $location = Location::find($locationName);

            if ($location->isNotEmpty()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Success',
                    'data' => $location
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

    public function getLocations($packageId)
    {
        try {
            $packagesLoc = PackageLocations::where('package_id', $packageId)->get();

            $locationNames = [];

            for ($i = 0; $i < count($packagesLoc); $i++) {

                $locationNames[] = $packagesLoc[$i]->loc_name;
            }

            return response()->json([
                'success' => true,
                'message' => 'Success',
                'data' => $locationNames
            ], 200);

            return response()->json([
                'success' => true,
                'message' => 'No packages',
                'data' => []
            ], 200);
        } catch (\Exception $e) {
            info($e->getMessage());
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    public function getLocationData()
    {
        try {
            $allPackages = Location::all();

            if ($allPackages->isNotEmpty()) {
                info('-------00------------000---------');
                info($allPackages);
                return response()->json([
                    'success' => true,
                    'message' => 'Success',
                    'data' => $allPackages
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
}
