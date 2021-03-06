<?php


namespace App\Services;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\PropertyResource;
use App\Http\Resources\PropertyCollection;
use App\Models\PropertyStatus;
use App\Models\User;
use Laravel\Sanctum\PersonalAccessToken;

class PropertyService
{
    public function getAllProperty(){

        return new PropertyCollection(Property::all());
    }
    public function createProperty(Request $request){
              //default property status
        $role= PropertyStatus::where('status_name','new')->get('id')->first() ;
       //getting landlord id from token
        $token = PersonalAccessToken::findToken($request->bearerToken());
        $user= $token->tokenable;
        $request->validate([
            'Property_name'=>'required',
            'Rent_amount'=>'required',
            'Location'=>'required',
            'Type_id'=>'required'
        ]);
        $status =  $role ->id;
        $user =Property::create([
            'Property_name'=>$request->Property_name,
            'Rent_amount'=>$request->Rent_amount,
            'Location'=>$request->Location,
            'landlord_id'=>$user->id,
            'Type_id'=>$request->Type_id,
            'status'=>$status
        ]);
            return (new PropertyResource($user))->response()->setStatusCode(Response::HTTP_CREATED);

    }
    public function getLandlordProperty(Request $request){
        $token = PersonalAccessToken::findToken($request->bearerToken());
        $user= $token->tokenable;
        $land=Property::where('landlord_id','=',$user->id)->get();
        return new PropertyCollection($land);
    }
    public function updateProperty(Request $request, Property $id){
        $landl = new PropertyResource($id);
        $landl->update($request->all());
        return ($landl)->response()->setStatusCode(Response::HTTP_OK); 
    }
    public function destroy(Property $id){
        $id->delete();
        return response("Property Successfully Deleted", Response::HTTP_OK);
    }
}
