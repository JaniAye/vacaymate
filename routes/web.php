<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\AgancyController;
use App\Http\Controllers\BookedPackageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\GuidesController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\ImageController;
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
Route::get('/location', function () {
    return view('locations');
});
Route::get('/vehicles', function () {
    return view('vehicles');
});
Route::get('/hotels', function () {
    return view('hotels');
});

Route::get('/guides', function () {
    return view('guides');
});
Route::get('/createdPackage', function () {
    return view('showCreatedPackage');
});

Route::get('/booking', [PackagesController::class, 'showBookingDetails']);
Route::get('/adminBooking', [PackagesController::class, 'showBookedPackageToAdmin']);
Route::get('/userBooking', [PackagesController::class, 'showBookedPackageToUser']);

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
Route::get('/provider-home', function () {
    return view('provider-panel');
});
Route::get('/user-home', function () {
    return view('user-panel');
});

Route::get('/provider-home', function () {
    return view('provider-panel');
});

Route::withoutMiddleware(['web', 'auth'])->post('/location-create', [LocationController::class, 'saveLocation'])->name('product.create');
Route::withoutMiddleware(['web', 'auth'])->post('/add-vehicle', [VehicleControler::class, 'saveVehicle'])->name('vehicle.create');
Route::withoutMiddleware(['web', 'auth'])->post('/signup', [AccountsController::class, 'createAccount'])->name('account.create');
Route::withoutMiddleware(['web', 'auth'])->post('/login', [AccountsController::class, 'loginAccount'])->name('account.login');
Route::withoutMiddleware(['web', 'auth'])->post('/add-hotel', [HotelsController::class, 'saveHotel'])->name('hotel.create');
Route::withoutMiddleware(['web', 'auth'])->post('/add-guide', [GuidesController::class, 'saveGuide'])->name('guide.create');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getLocations/{location}', [LocationController::class, 'getAllLocations']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getLocationById/{location}', [LocationController::class, 'getLocationById']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getVehicles/{vehicle}', [VehicleControler::class, 'getAllVehicles']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getHotels/{hotel}', [HotelsController::class, 'getAllhotels']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getGuides/{guide}', [GuidesController::class, 'getAllGuides']);
Route::withoutMiddleware(['web', 'auth'])->post('/create-package', [PackagesController::class, 'createPackage'])->name('package.create');
Route::withoutMiddleware(['web', 'auth'])->post('/confirm-booking', [BookedPackageController::class, 'updateBookedPackageStatus'])->name('booking.confirm');
Route::withoutMiddleware(['web', 'auth'])->post('/create-guidepackage', [PackagesController::class, 'createGuidePackage'])->name('gidpackage.create');
Route::withoutMiddleware(['web', 'auth'])->post('/create-htlpackage', [PackagesController::class, 'createHtlpackage'])->name('htlpackage.create');
Route::withoutMiddleware(['web', 'auth'])->post('/create-vehiclepackage', [PackagesController::class, 'createVehiclePackage'])->name('pkgVehicle.create');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getAllPackages', [PackagesController::class, 'getAllPackages'])->name('package.all');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getLocationDataAll', [LocationController::class, 'getLocationData'])->name('locations.all');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getVehiclesAllData', [VehicleControler::class, 'getVehiclesAllData'])->name('vehicles.all');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getHotelsAllData', [HotelsController::class, 'getHotelsAllData'])->name('hotels.all');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getGuidesAllData', [GuidesController::class, 'getGuidesAllData'])->name('guides.all');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getAllFilterPackages', [PackagesController::class, 'getAllFilterdPackages'])->name('package.filter');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getPackage/{packageId}', [PackagesController::class, 'getPackage']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getBooking/{packageId}', [BookingController::class, 'getBookingByPkgId']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getLocationsByPackage/{packageId}', [LocationController::class, 'getLocations']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getAgancyDetails/{agancyId}', [AgancyController::class, 'getAgancyDetails']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getPackageDetail/{packageId}', [PackagesController::class, 'getPackageDetail']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getBookPackage/{packageId}', [BookedPackageController::class, 'getBookedPackageDetail']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getImages/{packageId}', [ImageController::class, 'getImages']);
Route::withoutMiddleware(['web', 'auth'])->post('/package-book', [BookingController::class, 'createBooking'])->name('package.book');
Route::withoutMiddleware(['web', 'auth'])->post('/book', [BookingController::class, 'bookPackage'])->name('original.book');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getOWnPackages', [PackagesController::class, 'getAllFilterPackages'])->name('package.own');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->post('/getBookingByAgancyId', [BookingController::class, 'getBookingByAgancyId'])->name('booking.agancy');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->post('/getBookingByCustomerId', [BookingController::class, 'getBookingByCustId'])->name('booking.customer');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->post('/getAccountById', [AccountsController::class, 'getAccountById'])->name('account.id');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->post('/getbookedPackage', [BookedPackageController::class, 'getbookedPackage'])->name('booked.Package');
// Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->get('/getImages/{packageId}', [ImageController::class, 'getImages']);
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->post('/getPendingPackage', [BookedPackageController::class, 'getPendingPackage'])->name('pending.Package');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->post('/geConfirmedPackage', [BookedPackageController::class, 'getConfirmedPackage'])->name('confirm.Package');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->post('/geCompletePackage', [BookedPackageController::class, 'getCompletePackage'])->name('complete.Package');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->post('/geCanceledPackage', [BookedPackageController::class, 'getCanceledPackage'])->name('cancel.Package');
Route::middleware([\App\Http\Middleware\CorsMiddleware::class])->post('/upload', [FileUploadController::class, 'uploadFile'])->name('file.upload');
