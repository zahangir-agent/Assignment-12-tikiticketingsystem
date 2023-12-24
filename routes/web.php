<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TikiController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SeatAllocationController;

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
/*
Route::get('/', function () {
    return view('myapps/dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/myapps/dashboard',[TikiController::class,'dashboard']);
    Route::get('/myapps/location',[LocationController::class,'index']);
    Route::get('/myapps/trip',[TripController::class,'index']);
    Route::get('/myapps/viewtrip',[TripController::class,'alltrips']);
    Route::get('/myapps/seatallocation/{id}',[TripController::class,'availableseats'])->name('view_seat');
    Route::get('/myapps/seatconfirmation/{id}',[TripController::class,'confirmseats'])->name('confirm_seat');


    Route::post('/location-store',[LocationController::class,'store'] )->name('store-locarion');
    Route::post('/trip-store',[TripController::class,'store'] )->name('store-trip');
    Route::post('/confirm-store',[TripController::class,'tripconfirm'] )->name('trip-confirm');

 
});
*/

Route::get('/', function () {
    return view('myapps/dashboard');
});

Route::get('/myapps/dashboard',[TikiController::class,'dashboard']);
Route::get('/myapps/location',[LocationController::class,'index']);
Route::get('/myapps/trip',[TripController::class,'index']);
Route::get('/myapps/viewtrip',[TripController::class,'alltrips']);
Route::get('/myapps/seatallocation/{id}',[TripController::class,'availableseats'])->name('view_seat');
Route::get('/myapps/seatconfirmation/{id}',[TripController::class,'confirmseats'])->name('confirm_seat');


Route::post('/location-store',[LocationController::class,'store'] )->name('store-locarion');
Route::post('/trip-store',[TripController::class,'store'] )->name('store-trip');
Route::post('/confirm-store',[TripController::class,'tripconfirm'] )->name('trip-confirm');
