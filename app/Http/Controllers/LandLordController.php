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

    public function getLandLords()
    {
        return $this->landLordService->getLandLords();
    }

    public function getLandLord(LandLord $landLord): LandLordResource
    {
        return new LandLordResource($landLord);
    }

    public function storeLandLord(Request $request){

    }

    public function updateLandLord(){

    }
}
