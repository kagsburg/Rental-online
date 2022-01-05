<?php

namespace App\Http\Controllers;

use App\Http\Resources\LandLordResource;
use App\Http\Resources\UserResource;
use App\Models\LandLord;
use App\Models\User;
use App\Services\LandLordService;
use Illuminate\Http\Request;

class LandLordController extends Controller
{
    private $landLordService;

    public function __construct(LandLordService $landLordService)
    {
        $this->landLordService = $landLordService;
    }
//get all landlords
    public function getLandLords()
    {

        return $this->landLordService->getLandLords();
    }
//get specific landlord
    public function getLandLord(User $landLord): UserResource
    {
        return new UserResource($landLord);
    }
//create new landlord 
    public function storeLandLord(Request $request){
            return $this->landLordService->CreateLandlords($request);

    }
//update  landlord information
    public function updateLandLord(Request $request, User $id){
        return $this->landLordService->UpdateLandlords($request,$id);
    }
    
    //destory User LandLord
    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteLandLord(User $id)
    {
        //
        return $this ->landLordService->destroy($id);
        // $lords=User::destroy(User $id);
       
}
}