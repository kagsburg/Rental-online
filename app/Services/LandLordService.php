<?php


namespace App\Services;


use App\Http\Controllers\LandLordController;
use App\Http\Resources\LandLordCollection;
use App\Models\LandLord;

class LandLordService
{
    public function getLandLords(){
//        return LandLord::with('user')->get();
        return new LandLordCollection(LandLord::all());
    }



}
