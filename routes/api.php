<?php

use App\Http\Controllers\LandlordController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PropertyTypeController; 
use App\Http\Controllers\PropertyController; 
use App\Http\Controllers\PropertyUnitController; 
use App\Http\Controllers\PropertyStatusController; 
use App\Http\Controllers\TenantController; 
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeaseController;
use App\Http\Controllers\UserController;
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
//get all tenants
Route::get('/tenants',[TenantController::class,'getAllTenants']);

Route::post('/tenants',[LeaseController::class,'AddNewLeases']);


    // property_type routes
Route::get('/types', [PropertyTypeController::class, 'getAlltype']);//get all
Route::get('/types/{id}', [PropertyTypeController::class, 'getType']);//get with id
Route::delete('/types/{id}', [PropertyTypeController::class, 'deleteType']);//delete
Route::put('/types/{id}', [PropertyTypeController::class, 'updateType']);//update
Route::post('/types',[PropertyTypeController::class,'storeType']);//create
 // property routes
 Route::get('/property', [PropertyController::class, 'getAll']);//get all
 Route::get('/property/{id}', [PropertyController::class, 'getOneProperty']);//get with id
 Route::get('/landlordproperty', [PropertyController::class, 'getPropertyPerLandlord']);//get with id
 Route::delete('/property/{id}', [PropertyController::class, 'deleteProperty']);//delete
 Route::put('/property/{id}', [PropertyController::class, 'updateProperty']);//update
 Route::post('/property',[PropertyController::class,'storeProperty']);//create
 // property unit routes
 Route::get('/propertyunit', [PropertyUnitController::class, 'getAllPropertyUnits']);//get all
 Route::get('/propertyunit/{id}', [PropertyUnitController::class, 'getOnePropertyUnit']);//get with id
 Route::get('/landlordproperty/{id}', [PropertyUnitController::class, 'getPropertyPerLandlord']);//get with id
 Route::delete('/propertyunit/{id}', [PropertyUnitController::class, 'deletePropertyUnit']);//delete
 Route::put('/propertyunit/{id}', [PropertyUnitController::class, 'updatePropertyUnit']);//update
 Route::post('/propertyunit',[PropertyUnitController::class,'createPropertyUnit']);//create
 Route::get('/property_unit/{property_id}', [PropertyUnitController::class, 'getUnitsPerProperty']);//get all property units per given property
Route::post('/signin',[AuthController::class,'login']);

Route::get('/landlord', [LandlordController::class, 'getLandLords']);
Route::get('/landlord/{landLord}', [LandlordController::class, 'getLandLord']);
Route::delete('/landlord/{id}', [LandlordController::class, 'deleteLandLord']);
Route::put('/landlord/{id}', [LandlordController::class, 'updateLandLord']);
Route::post('/landlord/',[LandlordController::class,'storeLandLord']);
Route::post('/user/',[UserController::class,'storeUser']);
Route::get('/user/',[UserController::class,'getAllUsers']);
Route::post('/user_role/{id}',[UserController::class,'setNewRole']);

Route::group(['middleware'=>['auth:sanctum']], function () {
        
     //user role routes
 Route::get('/roles', [RoleController::class, 'getRoles']);//get all
 Route::get('/roles/{id}', [RoleController::class, 'getRole']);//get with id
 Route::delete('/roles/{id}', [RoleController::class, 'delete_role']);//delete
 Route::delete('/Allroles/{id}', [RoleController::class, 'delete_all_role']);//delete
 Route::put('/roles/{id}', [RoleController::class, 'update_role']);//update
 Route::post('/roles',[RoleController::class,'storeRoles']);//create
 //lease routes
 Route::get('/roles', [RoleController::class, 'getRoles']);//get all
 Route::get('/landlordleases/', [LeaseController::class, 'Landlordleases']);//get with id
 Route::delete('/roles/{id}', [RoleController::class, 'delete_role']);//delete
 Route::delete('/Allroles/{id}', [RoleController::class, 'delete_all_role']);//delete
 Route::put('/roles/{id}', [RoleController::class, 'update_role']);//update
 Route::post('/leases',[LeaseController::class,'AddNewLeases']);//create
    // //check the token is 
    Route::get('/ValidateToken', [AuthController::class, 'validateApiToken']);
    //landlord routes
    Route::post('/logout',[AuthController::class,'logout']);
 });

//Route::resource('users',)->only('index','edit');
