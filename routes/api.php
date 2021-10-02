<?php

use App\Http\Controllers\LandlordController;
use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/roles', [RoleController::class, 'getRoles']);//get all
Route::get('/roles/{id}', [RoleController::class, 'getRole']);//get with id
Route::delete('/roles/{id}', [RoleController::class, 'delete_role']);//delete
Route::put('/roles/{id}', [RoleController::class, 'update_role']);//update
Route::post('/roles',[RoleController::class,'storeRoles']);//create
// Route::get('/landlord',[LandlordResource::class,all()]);
//Route::apiResource('landlord', LandlordController::class);
Route::get('/landlord', [LandlordController::class, 'getLandLords']);
Route::get('/landlord/{landLord}', [LandlordController::class, 'getLandLord']);
Route::delete('/landlord/{landlord}', [LandlordController::class, 'destroy']);
Route::put('/landlord/{id}', [LandlordController::class, 'update']);
Route::post('/landlord',[LandlordController::class,'storeLandLord']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('users',)->only('index','edit');
