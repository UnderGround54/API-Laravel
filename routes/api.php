<?php

use App\Http\Controllers\Api\ProvinceController;
use App\Http\Controllers\Api\RegionController;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('/provinces', ProvinceController::class);
Route::apiResource('/regions', RegionController::class);
