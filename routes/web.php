<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\VehicleControler;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('dashboard');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/package', function () {
    return view('package');
});
Route::get('/booking', function () {
    return view('package-details');
});
Route::get('/create-package', function () {
    return view('add-package');
});
Route::get('/custormize', function () {
    return view('package-custormize');
});

Route::withoutMiddleware(['web', 'auth'])->post('/location-create', [LocationController::class, 'saveLocation'])->name('product.create');
Route::withoutMiddleware(['web', 'auth'])->post('/add-vehicle', [VehicleControler::class, 'saveVehicle'])->name('vehicle.create');
