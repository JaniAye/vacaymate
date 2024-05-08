<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function uploadFile(Request $request)
    {

        // $request->validate([
        //     'file' => 'required|file|mimes:jpg,jpeg,png,gif|max:2048', // Modify as needed
        // ]);

        $file = $request->file('file');

        $destinationPath = $request->input('path');
        info($file);
        info($destinationPath);
        $fileName = time() . '_' . $file->getClientOriginalName();


        $file->move(public_path($destinationPath), $fileName);

        return response()->json(['success' => true, 'message' => 'File uploaded successfully', 'file_name' => $fileName]);
    }
}
