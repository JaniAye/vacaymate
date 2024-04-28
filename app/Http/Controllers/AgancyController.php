<?php

namespace App\Http\Controllers;

use App\Models\Agancy;
use Illuminate\Http\Request;

class AgancyController extends Controller
{
    public function getAgancyDetails($agancyID)
    {
        try {
            $agancyData = Agancy::find($agancyID);

            return response()->json([
                'success' => true,
                'message' => 'Success',
                'data' => $agancyData
            ], 200);

            return response()->json([
                'success' => true,
                'message' => 'No Agancy',
                'data' => []
            ], 200);
        } catch (\Exception $e) {
            info($e->getMessage());
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
