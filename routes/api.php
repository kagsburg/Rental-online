<?php

use App\Http\Controllers\Api\LandlordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\LandlordResource;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::get('/landlord',[LandlordResource::class,all()]);
//Route::apiResource('landlord', LandlordController::class);
Route::get('/landlord', [LandlordController::class, 'index']);
Route::get('/landlord/{id}', [LandlordController::class, 'show']);
Route::delete('/landlord/{landlord}', [LandlordController::class, 'destroy']);
Route::put('/landlord/{id}', [LandlordController::class, 'update']);
Route::post('/landlord',[LandlordController::class,'store']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
