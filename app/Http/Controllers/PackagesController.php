<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\PackageGuides;
use App\Models\PackageHotels;
use App\Models\PackageLocations;
use App\Models\Packages;
use App\Models\PackageVehicleDetails;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function createPackage(Request $request)
    {

        $res = Packages::create([
            'package_name' => $request->packageName,
            'agancy_id' => $request->agancy,
            'discription' => $request->discription,
            'person_count' => $request->personCount,
            'day_count' => $request->dateCount,
            'airport_pickup' => (int) $request->chkAirportPick,
            'airport_drop' => (int) $request->chkAirportDrop,
            'free_guide' => (int)  $request->chkTourGuide,
            'ultimate_service' => (int)  $request->ultimateService,
            'price' => $request->price

            // 'reviews' => $request->reviews
        ]);
        if ($res) {
            $gidSet = $request->input('gidSet');
            for ($i = 0; $i < count($gidSet); $i++) {
                PackageGuides::create([
                    'package_id' => $res->id,
                    'guide_id' => $gidSet[$i]
                ]);
            }
        }
        if ($res) {
            $vehicleNo = $request->input('vehicleNo');
            for ($i = 0; $i < count($vehicleNo); $i++) {
                PackageVehicleDetails::create([
                    'package_id' => $res->id,
                    'vehicle_no' => $vehicleNo[$i]
                ]);
            }
        }
        if ($res) {
            $hotelsIds = $request->input('hotelsIds');
            for ($i = 0; $i < count($hotelsIds); $i++) {
                PackageHotels::create([
                    'package_id' => $res->id,
                    'hotel_id' => $hotelsIds[$i]
                ]);
            }
        }

        if ($res) {
            $locIds = $request->input('locIds');
            for ($i = 0; $i < count($locIds); $i++) {
                PackageLocations::create([
                    'package_id' => $res->id,
                    'loc_name' => $locIds[$i]
                ]);
            }
        }


        return response()->json([
            'success' => true,
            'message' => 'New Package Created'
        ], 201);
    }

    public function getAllPackages()
    {
        try {
            $allPackages = Packages::all();

            if ($allPackages->isNotEmpty()) {
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


    public function getPackageDetail($packageId)
    {
        try {
            $package = Packages::find($packageId);

            if ($package->isNotEmpty()) {
                $packageLocations = PackageLocations::where('package_id', $packageId)->get();
                $packageVehicles = PackageVehicleDetails::where('package_id', $packageId)->get();
                $packageHotels = PackageHotels::where('package_id', $packageId)->get();
                $packageGuides = PackageGuides::where('package_id', $packageId)->get();

                $packageDetails = [
                    'package' => $package,
                    'locations' => $packageLocations->toArray(),
                    'vehicles' => $packageVehicles->toArray(),
                    'hotels' => $packageHotels->toArray(),
                    'guides' => $packageGuides->toArray(),
                ];

                return response()->json([
                    'success' => true,
                    'message' => 'Success',
                    'data' => $packageDetails
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
