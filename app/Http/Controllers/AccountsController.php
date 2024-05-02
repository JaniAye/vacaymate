<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountsController extends Controller
{
    public function createAccount(Request $request)
    {

        $isExsistUser = Accounts::where('email', $request->email)
            ->get();

        if (count($isExsistUser) > 0) {
            return response()->json([
                'success' => true,
                'message' => 'Already Registerd Email'
            ], 200);
        }
        $account = Accounts::create([
            'name' => $request->name,
            'nic' => "-",
            'base_img' => "-",
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => 1,
            'country' => "-",
            'type' => $request->type
        ]);

        if ($account === null) {

            info('Account creation failed for email: ');
            return response()->json([
                'success' => false,
                'message' => 'Failed to create account. Please try again.'
            ], 500);
        }

        return response()->json([
            'success' => true,
            'message' => 'Account created successfully',
            'account' => $account
        ], 201);
    }
    public function loginAccount(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Accounts::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid',
            ], 401);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid',
            ], 401);
        }

        return response()->json([
            'success' => true,
            'message' => 'successful',
            'user' => $user,
        ], 200);
    }
}
