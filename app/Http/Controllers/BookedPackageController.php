<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\BookedPackage;
use App\Models\Guides;
use App\Models\Hotels;
use App\Models\Location;
use App\Models\PackageGuides;
use App\Models\PackageHotels;
use App\Models\PackageLocations;
use App\Models\Packages;
use App\Models\PackageVehicleDetails;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class BookedPackageController extends Controller
{
    public function updateBookedPackageStatus(Request $request)
    {
        try {
            $pkg = BookedPackage::find($request->packageId);

            if ($pkg) {

                $pkg->update(['status' => $request->status]);
                $msg = 'Booking Confirmed Successfully';
                if ($request->status == 3) {
                    $msg = 'Booking Rejected';
                }
                return response()->json([
                    'success' => true,
                    'message' => $msg,
                    'data' => $pkg
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Package not found',
                    'data' => null
                ], 404);
            }
        } catch (\Exception $e) {
            info($e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to update package status',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function getbookedPackage(Request $request)
    {
        try {
            $pkg = BookedPackage::find($request->pkgId);
            if ($pkg) {

                return response()->json([
                    'success' => true,
                    'message' => 'pkg',
                    'data' => $pkg
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

    public function getPendingPackage(Request $request)
    {

        try {
            $pkg = BookedPackage::where('status', 1)
                ->find($request->pkgId);
            if ($pkg) {

                return response()->json([
                    'success' => true,
                    'message' => 'pkg',
                    'data' => $pkg
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
    public function getConfirmedPackage(Request $request)
    {

        try {

            $pkg = BookedPackage::where('status', 2)
                ->find($request->pkgId);
            if ($pkg) {

                return response()->json([
                    'success' => true,
                    'message' => 'pkg',
                    'data' => $pkg
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

    public function getCanceledPackage(Request $request)
    {

        try {

            $pkg = BookedPackage::whereIn('status', [3, 5])
                ->find($request->pkgId);
            if ($pkg) {

                return response()->json([
                    'success' => true,
                    'message' => 'pkg',
                    'data' => $pkg
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

    public function getCompletePackage(Request $request)
    {

        try {

            $pkg = BookedPackage::where('status', 4)
                ->find($request->pkgId);
            if ($pkg) {

                return response()->json([
                    'success' => true,
                    'message' => 'pkg',
                    'data' => $pkg
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


    public function getBookedPackageDetail($packageId)
    {

        try {
            $package = BookedPackage::find($packageId);

            if ($package) {

                $packageLocations = PackageLocations::where('package_id', $package->pkg_id)->get();
                $packageVehicles = PackageVehicleDetails::where('package_id', $package->pkg_id)->get();
                $packageHotels = PackageHotels::where('package_id', $package->pkg_id)->get();
                $packageGuides = PackageGuides::where('package_id', $package->pkg_id)->get();
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
}
