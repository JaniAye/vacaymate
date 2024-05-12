<?php

namespace App\Http\Controllers;

use App\Models\BookedPackage;
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

            $pkg = BookedPackage::where('status', 3)
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
}
