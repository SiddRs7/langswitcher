<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLocationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $geoipInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
//     return view('welcome');
// });

Route::get('/', function () {

    return view('welcome', [
        'geoipInfo' => geoip()->getLocation($_SERVER['REMOTE_ADDR'])
    ]);
});

Route::get('/geoip', function () {
    $Ip = geoip()->getClientIP($_SERVER['REMOTE_ADDR']);
    $geoipInfo = geoip()->getLocation($Ip);
    // ->getClientIP()
    // ->getLocation($_SERVER['REMOTE_ADDR']) - THIS FOR DYNAMICALLY CHANGING IP
    // ->getLocation(ip: '172.16.164.56');
    return $geoipInfo->ip;
});

Route::get('location', [UserLocationController::class, 'index']);
