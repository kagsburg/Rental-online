<?php


namespace App\Services;

use App\Http\Resources\LandlordResource;
use App\Http\Resources\LandLordCollection;
use App\Models\LandLord;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class LandLordService
{
    public function getLandLords(){

        return new LandLordCollection(LandLord::all());
    }
    public function CreateLandlords(Request $request){
        
        $request->validate([
            'Full_name'=>'required',
            'Email'=>'string|string|max:255|email|unique:land_lords,email',
            'Address'=>'required',
            'NIN'=>'required'
        ]);
        $user =Landlord::create($request->all());
            return (new LandlordResource($user))->response()->setStatusCode(Response::HTTP_CREATED);

    }
    public function UpdateLandlords(Request $request, Landlord $id){
        $landl = new LandlordResource($id);
        $landl->update($request->all());
        return ($landl)->response()->setStatusCode(Response::HTTP_ACCEPTED); 
    }


}
