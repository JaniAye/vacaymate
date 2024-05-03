<?php

namespace App\Http\Controllers;

use App\Models\BookedPackage;
use Illuminate\Http\Request;

class BookedPackageController extends Controller
{
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
}
