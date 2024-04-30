<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function createPackage(Request $request)
    {
        $res = Booking::create([
            'cust_id' => $request->customerId,
            'pkg_id' => $request->packageId,
            'status' => $request->status,
            'st_date' => $request->startDate,
            'end_date' => $request->endDate,
            'price' => $request->price,
            'comments' => $request->comment
        ]);
        return response()->json([
            'success' => true,
            'message' => 'New Package Created'
        ], 201);
    }
}
