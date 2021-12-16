<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataProvinsiController;
use App\Http\Controllers\DataIndonesiaController;

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
    return view('welcome');
});

Route::get('indonesia', [DataIndonesiaController::class, 'index']);
Route::post("indonesia", [DataIndonesiaController::class, 'getDataIndonesia']);
Route::get('provinsi', [DataProvinsiController::class, 'index']);
Route::post("provinsi", [DataProvinsiController::class, 'getDataProvinsi']);
