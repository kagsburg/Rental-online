<?php

use App\Http\Controllers\LandlordController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PropertyTypeController; 
use App\Http\Controllers\AuthController;
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
//user role routes
Route::get('/roles', [RoleController::class, 'getRoles']);//get all
Route::get('/roles/{id}', [RoleController::class, 'getRole']);//get with id
Route::delete('/roles/{id}', [RoleController::class, 'delete_role']);//delete
Route::put('/roles/{id}', [RoleController::class, 'update_role']);//update
Route::post('/roles',[RoleController::class,'storeRoles']);//create

// Route::get('/landlord',[LandlordResource::class,all()]);
    // property type routes
Route::get('/types', [PropertyTypeController::class, 'getAlltype']);//get all
Route::get('/types/{id}', [PropertyTypeController::class, 'getType']);//get with id
Route::delete('/types/{id}', [PropertyTypeController::class, 'deleteType']);//delete
Route::put('/types/{id}', [PropertyTypeController::class, 'updateType']);//update
Route::post('/types',[PropertyTypeController::class,'storeType']);//create
//Route::apiResource('landlord', LandlordController::class);

// Route::group(['middleware'=>['auth:sanctum']]), function () {
    //login route
    Route::post('/login',[AuthController::class,'login']);

// };
Route::group(['middleware'=>['auth:sanctum']], function () {
    //landlord routes
    Route::get('/landlord', [LandlordController::class, 'getLandLords']);
    Route::get('/landlord/{landLord}', [LandlordController::class, 'getLandLord']);
    Route::delete('/landlord/{id}', [LandlordController::class, 'deleteLandLord']);
    Route::put('/landlord/{id}', [LandlordController::class, 'updateLandLord']);
    Route::post('/landlord/',[LandlordController::class,'storeLandLord']);
    
     Route::post('/logout',[AuthController::class,'logout']);
 });

//Route::resource('users',)->only('index','edit');
