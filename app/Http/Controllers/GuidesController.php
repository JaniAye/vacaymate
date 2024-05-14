<?php

namespace App\Http\Controllers;

use App\Models\Guides;
use Illuminate\Http\Request;
use Ramsey\Uuid\Guid\Guid;
use Illuminate\Support\Str;

class GuidesController extends Controller
{
    public function saveGuide(Request $request)
    {

        // $request->validate([
        //     'vehicleNo' => 'required',
        //     'model' => 'required',
        //     'discription' => 'required',
        //     'type' => 'required',
        //     'is_ac' => 'required',
        //     'is_adjustable_seat' => 'required',
        //     'is_power_shutter' => 'required',
        //     'reviews' => 'required'
        // ]);
        // 'guide_name',
        // 'location',
        // 'discription',
        // 'isTranslator',
        // 'is_eng',
        // 'is_spanish',
        // 'is_Russ',
        // '',
        // 'is_chn',
        // 'reviews'

        Guides::create([
            'guide_name' => $request->guideName,
            'location' => $request->guideLocation,
            'discription' => $request->guideDiscription,
            'isTranslator' => $request->guideType,
            'is_eng' => (int) $request->is_eng,
            'is_spanish' => (int) $request->is_spanish,
            'is_Russ' => (int)  $request->is_Russ,
            'is_jpn' => (int)  $request->is_jpn,
            'is_chn' => (int)  $request->is_chn,
            'reviews' => $request->reviews
        ]);


        return response()->json([
            'success' => true,
            'message' => 'New Guide Added'
        ], 201);
    }
    public function getAllGuides($guideName)
    {
        try {
            $allGuides = Guides::where('guide_name', 'like', $guideName . '%')
                ->orderBy('created_at', 'desc')
                ->get();

            if ($allGuides->isNotEmpty()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Success',
                    'data' => $allGuides
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

    public function getGuidesAllData()
    {
        try {
            $allHotels = Guides::all();

            if ($allHotels->isNotEmpty()) {

                return response()->json([
                    'success' => true,
                    'message' => 'Success',
                    'data' => $allHotels
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

    public function getGuideByName($guide)
    {

        $values = Str::of($guide)->explode(',');

        try {

            $htls = Guides::whereIn('id', $values)->get();
            info($htls);
            if ($htls !== null) {
                return response()->json([
                    'success' => true,
                    'message' => 'Success',
                    'data' => $htls
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
}
