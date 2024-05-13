<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Guides;
use App\Models\Hotels;
use App\Models\Images;
use App\Models\Location;
use App\Models\PackageGuides;
use App\Models\PackageHotels;
use App\Models\PackageLocations;
use App\Models\Packages;
use App\Models\PackageVehicleDetails;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class PackagesController extends Controller
{

    public function showBookingDetails(Request $request)
    {
        $packageId = $request->query('id', 0);

        return view('package-details', ['packageId' => $packageId]);
    }

    public function showBookedPackageToAdmin(Request $request)
    {
        $packageId = $request->query('id', 0);

        return view('package-details-admin', ['packageId' => $packageId]);
    }

    public function showBookedPackageToUser(Request $request)
    {
        $packageId = $request->query('id', 0);

        return view('package-details-user', ['packageId' => $packageId]);
    }
    public function custormizepkg(Request $request)
    {
        $packageId = $request->query('id', 0);

        return view('package-custormize', ['packageId' => $packageId]);
    }

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
            'price' => $request->price,
            'type' => "COMPLETE",
            'status' => 1

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
        if ($res) {

            $images = $request->input('images');
            for ($i = 0; $i < count($images); $i++) {
                Images::create([
                    'image_path' => $images[$i],
                    'image_type' => 'PACKAGE',
                    'type_id' => $res->id

                ]);
            }
        }


        return response()->json([
            'success' => true,
            'message' => 'New Package Created'
        ], 201);
    }


    public function createHtlpackage(Request $request)
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
            'price' => $request->price,
            'type' => "HOTEL",
            'status' => 1

        ]);


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

            $images = $request->input('images');
            for ($i = 0; $i < count($images); $i++) {
                Images::create([
                    'image_path' => $images[$i],
                    'image_type' => 'PACKAGE',
                    'type_id' => $res->id

                ]);
            }
        }


        return response()->json([
            'success' => true,
            'message' => 'New Package Created'
        ], 201);
    }
    public function createVehiclePackage(Request $request)
    {

        $res = Packages::create([
            'package_name' => $request->packageName,
            'agancy_id' => $request->agancy,
            'discription' => $request->discription,
            'person_count' => $request->personCount,
            'day_count' => $request->dateCount,
            'airport_pickup' => (int) $request->chkAirportPick,
            'airport_drop' => (int) $request->chkAirportDrop,
            'free_guide' => (int)  $request->withDriver,
            'ultimate_service' => 0,
            'price' => $request->price,
            'type' => "VEHICLE",
            'status' => 1

            // 'reviews' => $request->reviews
        ]);

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

            $images = $request->input('images');
            for ($i = 0; $i < count($images); $i++) {
                Images::create([
                    'image_path' => $images[$i],
                    'image_type' => 'PACKAGE',
                    'type_id' => $res->id

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

    public function getPackage($packageId)
    {
        try {
            $package = Packages::find($packageId);
            return response()->json([
                'success' => true,
                'message' => 'Success',
                'data' => $package
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

    public function getPackageDetail($packageId)
    {

        try {
            $package = Packages::find($packageId);
            if ($package) {
                $packageLocations = PackageLocations::where('package_id', $packageId)->get();
                $packageVehicles = PackageVehicleDetails::where('package_id', $packageId)->get();
                $packageHotels = PackageHotels::where('package_id', $packageId)->get();
                $packageGuides = PackageGuides::where('package_id', $packageId)->get();
                $account = Accounts::find($package->agancy_id);

                $allRelatedLocations = [];
                $allVehicles = [];
                $allhotels = [];
                $allGuides = [];
                for ($i = 0; $i < count($packageLocations); $i++) {
                    $relatedLocations = Location::whereIn('name', $packageLocations[$i])->get();
                    $allRelatedLocations = array_merge($allRelatedLocations, $relatedLocations->toArray());
                }

                for ($i = 0; $i < count($packageVehicles); $i++) {
                    $relatedVehicle = Vehicle::whereIn('vehicle_no', $packageVehicles[$i])->get();
                    $allVehicles = array_merge($allVehicles, $relatedVehicle->toArray());
                    // info($relatedLocations);
                }

                for ($i = 0; $i < count($packageHotels); $i++) {
                    $relatedHotel = Hotels::where('id', $packageHotels[$i]->hotel_id)->get();
                    $allhotels = array_merge($allhotels, $relatedHotel->toArray());
                }

                for ($i = 0; $i < count($packageGuides); $i++) {
                    $relatedGuide = Guides::where('id', $packageGuides[$i]->guide_id)->get();
                    $allGuides = array_merge($allGuides, $relatedGuide->toArray());
                }

                $packageDetails = [
                    'package' => $package,
                    'account' => $account,
                    'locations' => $allRelatedLocations,
                    'vehicles' => $allVehicles,
                    'hotels' => $allhotels,
                    'guides' => $allGuides,
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

    public function createGuidePackage(Request $request)
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
            'price' => $request->price,
            'type' => "GUIDE",
            'status' => 1

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

            $images = $request->input('images');
            for ($i = 0; $i < count($images); $i++) {
                Images::create([
                    'image_path' => $images[$i],
                    'image_type' => 'PACKAGE',
                    'type_id' => $res->id

                ]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'New Package Created'
        ], 201);
    }



    public function getAllFilterdPackages(Request $request)
    {
        try {
            $allPackages = Packages::where('type', $request->type)->get();

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
    public function getAllFilterPackages(Request $request)
    {
        try {
            $allPackages = Packages::where('agancy_id', $request->userID)->get();

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
}
