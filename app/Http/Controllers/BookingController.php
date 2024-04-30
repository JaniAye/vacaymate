<?php

namespace App\Http\Controllers;

use App\Models\BookedGuides;
use App\Models\BookedHotels;
use App\Models\BookedLocations;
use App\Models\BookedPackage;
use App\Models\BookedVehicleDetails;
use App\Models\Booking;
use App\Models\CustormizedPackage;
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
            'message' => 'New Package Created'
        ], 201);
    }
}
