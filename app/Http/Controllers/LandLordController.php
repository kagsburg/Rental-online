<?php

namespace App\Http\Controllers;

use App\Http\Resources\LandLordResource;
use App\Models\LandLord;
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
    public function getLandLord(LandLord $landLord): LandLordResource
    {
        return new LandLordResource($landLord);
    }
//create new landlord 
    public function storeLandLord(Request $request){
            return $this->landLordService->CreateLandlords($request);

    }
//update  landlord information
    public function updateLandLord(Request $request, Landlord $id){
        return $this->landLordService->UpdateLandlords($request,$id);
    }
}
