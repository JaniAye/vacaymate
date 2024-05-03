<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\BookedGuides;
use App\Models\BookedHotels;
use App\Models\BookedLocations;
use App\Models\BookedPackage;
use App\Models\BookedVehicleDetails;
use App\Models\Booking;
use App\Models\CustormizedPackage;
use App\Models\PackageGuides;
use App\Models\PackageHotels;
use App\Models\PackageLocations;
use App\Models\Packages;
use App\Models\PackageVehicleDetails;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function createBooking(Request $request)
    {

        $res = BookedPackage::create([
            'pkg_id' => $request->packageId,
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
                BookedGuides::create([
                    'pkg_id' => $res->id,
                    'guide_id' => $gidSet[$i]
                ]);
            }
        }
        if ($res) {
            $vehicleNo = $request->input('vehicleNo');
            for ($i = 0; $i < count($vehicleNo); $i++) {
                BookedVehicleDetails::create([
                    'pkg_id' => $res->id,
                    'vehicle_no' => $vehicleNo[$i]
                ]);
            }
        }
        if ($res) {
            $hotelsIds = $request->input('hotelsIds');
            for ($i = 0; $i < count($hotelsIds); $i++) {
                BookedHotels::create([
                    'pkg_id' => $res->id,
                    'hotel_id' => $hotelsIds[$i]
                ]);
            }
        }

        if ($res) {
            $locIds = $request->input('locIds');
            for ($i = 0; $i < count($locIds); $i++) {
                BookedLocations::create([
                    'pkg_id' => $res->id,
                    'loc_name' => $locIds[$i]
                ]);
            }
        }

        $res = Booking::create([
            'cust_id' => 1,
            'pkg_id' => $res->id,
            'status' => "PENDING",
            'type' => "AAA",
            'st_date' => "2023-04-05",
            'end_date' => "2023-04-29",
            'price' => $request->price,
            'comments' => "csa"
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thank you for submitting customized package we will review this and get back to you shortly'
        ], 201);
    }

    public function bookPackage(Request $request)
    {
        try {
            $package = Packages::find($request->packageId);
            if ($package) {

                $res = BookedPackage::create([
                    'pkg_id' => $request->packageId,
                    'package_name' => $package->package_name,
                    'agancy_id' => $package->agancy_id,
                    'discription' => $package->discription,
                    'person_count' => $package->person_count,
                    'day_count' => $package->day_count,
                    'airport_pickup' => (int) $package->airport_pickup,
                    'airport_drop' => (int) $package->airport_drop,
                    'free_guide' => (int)  $package->free_guide,
                    'ultimate_service' => (int)  $package->ultimate_service,
                    'price' => $package->price,
                    'type' =>  $package->type,
                    'status' => $package->status
                    // 'reviews' => $request->reviews
                ]);

                $packageLocations = PackageLocations::where('package_id', $request->packageId)->get();
                $packageVehicles = PackageVehicleDetails::where('package_id', $request->packageId)->get();
                $packageHotels = PackageHotels::where('package_id', $request->packageId)->get();
                $packageGuides = PackageGuides::where('package_id', $request->packageId)->get();


                for ($i = 0; $i < count($packageLocations); $i++) {
                    BookedLocations::create([
                        'pkg_id' => $res->id,
                        'loc_name' => $packageLocations[$i]->loc_name
                    ]);
                }

                for ($i = 0; $i < count($packageVehicles); $i++) {
                    BookedVehicleDetails::create([
                        'pkg_id' => $res->id,
                        'vehicle_no' => $packageVehicles[$i]->vehicle_no
                    ]);
                }

                for ($i = 0; $i < count($packageHotels); $i++) {
                    BookedHotels::create([
                        'pkg_id' => $res->id,
                        'hotel_id' => $packageHotels[$i]->hotel_id
                    ]);
                }

                for ($i = 0; $i < count($packageGuides); $i++) {
                    BookedGuides::create([
                        'pkg_id' => $res->id,
                        'guide_id' => $packageGuides[$i]->guide_id
                    ]);
                }


                $date = Carbon::createFromFormat('d/m/Y', $request->stDate);
                $formattedSTDate = $date->format('Y-m-d');

                $date2 = Carbon::createFromFormat('d/m/Y', $request->endDate);
                $formattedENDDate = $date2->format('Y-m-d');
                $res = Booking::create([
                    'cust_id' => $request->userId,
                    'pkg_id' =>  $res->id,
                    'agancy_id' => $package->agancy_id,
                    'status' => "PENDING",
                    'type' => "AAA",
                    'st_date' => $formattedSTDate,
                    'end_date' => $formattedENDDate,
                    'price' => $package->price,
                    'comments' => ""
                ]);

                $packageDetails = [
                    'package' => $package
                ];

                return response()->json([
                    'success' => true,
                    'message' => 'Package Booked Successfully.We will respond as soon as possible.',
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

    public function getBookingByAgancyId(Request $request)
    {

        try {
            $bookings = Booking::where('agancy_id', $request->agancyId)
                ->where('status', $request->status)
                ->get();

            if ($bookings->isNotEmpty()) {

                return response()->json([
                    'success' => true,
                    'message' => 'bookings',
                    'data' => $bookings
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
