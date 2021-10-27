<?php

use App\Http\Controllers\LandlordController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PropertyTypeController; 
use App\Http\Controllers\PropertyController; 
use App\Http\Controllers\PropertyStatusController; 
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
//property status routes
Route::get('/status', [PropertyStatusController::class, 'getAllStatus']);//get all
Route::get('/status/{id}', [PropertyStatusController::class, 'get_Status']);//get with id
Route::delete('/status/{id}', [PropertyStatusController::class, 'deleteStatus']);//delete
Route::put('/status/{id}', [PropertyStatusController::class, 'updateStatus']);//update
Route::post('/status',[PropertyStatusController::class,'storeStatus']);//create

//user role routes
Route::get('/roles', [RoleController::class, 'getRoles']);//get all
Route::get('/roles/{id}', [RoleController::class, 'getRole']);//get with id
Route::delete('/roles/{id}', [RoleController::class, 'delete_role']);//delete
Route::put('/roles/{id}', [RoleController::class, 'update_role']);//update
Route::post('/roles',[RoleController::class,'storeRoles']);//create

// Route::get('/landlord',[LandlordResource::class,all()]);
    // property_type routes
Route::get('/types', [PropertyTypeController::class, 'getAlltype']);//get all
Route::get('/types/{id}', [PropertyTypeController::class, 'getType']);//get with id
Route::delete('/types/{id}', [PropertyTypeController::class, 'deleteType']);//delete
Route::put('/types/{id}', [PropertyTypeController::class, 'updateType']);//update
Route::post('/types',[PropertyTypeController::class,'storeType']);//create
 // property routes
 Route::get('/property', [PropertyController::class, 'getAll']);//get all
 Route::get('/property/{id}', [PropertyController::class, 'getOneProperty']);//get with id
 Route::delete('/property/{id}', [PropertyController::class, 'deleteProperty']);//delete
 Route::put('/property/{id}', [PropertyController::class, 'updateProperty']);//update
 Route::post('/property',[PropertyController::class,'storeProperty']);//create
//Route::apiResource('landlord', LandlordController::class);

// Route::group(['middleware'=>['auth:sanctum']]), function () {
    //login route
    Route::post('/signin',[AuthController::class,'login']);
   // Route::post('/landlord/',[LandlordController::class,'storeLandLord']);

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
