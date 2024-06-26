<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

use App\Http\Controllers\RiskAreaController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlertController;

Route::resource('risk-areas', RiskAreaController::class);
Route::resource('incidents', IncidentController::class);
Route::resource('users', UserController::class);
Route::resource('alerts', AlertController::class);
