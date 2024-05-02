<?php

use App\Http\Controllers\AgancyController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GuidesController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\VehicleControler;
use App\Models\Agancy;
use App\Models\PackageLocations;
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
// Route::get('/booking', function () {
//     return view('package-details');
// });

Route::get('/booking', [PackagesController::class, 'showBookingDetails']);

Route::get('/custormize', [PackagesController::class, 'custormizepkg']);

Route::get('/create-package', function () {
    return view('add-package');
});
Route::get('/vehicle-package', function () {
    return view('add-vehicle-package');
});
Route::get('/guide-package', function () {
    return view('add-guidepackage');
});
Route::get('/hotel-package', function () {
    return view('add-hotelpackage');
});

Route::withoutMiddleware(['web', 'auth'])->post('/location-create', [LocationController::class, 'saveLocation'])->name('product.create');
Route::withoutMiddleware(['web', 'auth'])->post('/add-vehicle', [VehicleControler::class, 'saveVehicle'])->name('vehicle.create');
Route::withoutMiddleware(['web', 'auth'])->post('/add-hotel', [HotelsController::class, 'saveHotel'])->name('hotel.create');
Route::withoutMiddleware(['web', 'auth'])->post('/add-guide', [GuidesController::class, 'saveGuide'])->name('guide.create');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getLocations/{location}', [LocationController::class, 'getAllLocations']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getLocationById/{location}', [LocationController::class, 'getLocationById']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getVehicles/{vehicle}', [VehicleControler::class, 'getAllVehicles']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getHotels/{hotel}', [HotelsController::class, 'getAllhotels']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getGuides/{guide}', [GuidesController::class, 'getAllGuides']);
Route::withoutMiddleware(['web', 'auth'])->post('/create-package', [PackagesController::class, 'createPackage'])->name('package.create');
Route::withoutMiddleware(['web', 'auth'])->post('/create-htlpackage', [PackagesController::class, 'createHtlpackage'])->name('htlpackage.create');
Route::withoutMiddleware(['web', 'auth'])->post('/create-vehiclepackage', [PackagesController::class, 'createVehiclePackage'])->name('pkgVehicle.create');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getAllPackages', [PackagesController::class, 'getAllPackages'])->name('package.all');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getPackage/{packageId}', [PackagesController::class, 'getPackage']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getLocationsByPackage/{packageId}', [LocationController::class, 'getLocations']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getAgancyDetails/{agancyId}', [AgancyController::class, 'getAgancyDetails']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getPackageDetail/{packageId}', [PackagesController::class, 'getPackageDetail']);
Route::withoutMiddleware(['web', 'auth'])->post('/package-book', [BookingController::class, 'createBooking'])->name('package.book');
Route::withoutMiddleware(['web', 'auth'])->post('/book', [BookingController::class, 'bookPackage'])->name('original.book');
