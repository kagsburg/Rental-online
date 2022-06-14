<?php

namespace App\Services;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\PropertyUnit;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\UserResource;
use App\Http\Resources\PropertyUnitCollection;
use App\Http\Resources\PropertyUnitResource;
use Laravel\Sanctum\PersonalAccessToken;

class PropertyUnitService
{
    public function CreateDefaultUser(Request $request){
        $role= Role::find(3);
        $request->validate([
            'Full_name'=>'required',
            'Email'=>'string|string|max:255|Email|unique:users,Email',
            'NIN'=>'required',
            'password'=>'required'
        ]);
       
        $ole= $role->id;
        $user =PropertyUnit::create([
            'Full_name'=>$request->Full_name,
            'Email'=>$request->Email,
            'NIN'=>$request->NIN,
            'password'=>$request->password,
            'role_id'=>$ole
        ]);
       
            return (new UserResource($user))->response()->setStatusCode(Response::HTTP_CREATED);

    }
    //getting all property units
    public function GetAllUnits ($request){
         //getting landlord id from token
         $token = PersonalAccessToken::findToken($request->bearerToken());
         $user= $token->tokenable;
         $result = PropertyUnit::where('created_by','=',$user->id)->get();
         return new PropertyUnitCollection($result);
        // return new (PropertyUnit::all());
    }
    //creating a new property unit
    public function CreateUnit (Request $request){
         //getting landlord id from token
         $token = PersonalAccessToken::findToken($request->bearerToken());
         $user= $token->tokenable;
        //validate the request
        $request->validate([
            'Unit_title'=>'required',
            'Rent'=>'required',
            'Initial_deposit'=>'required',
            'status'=>'required',
            'property_id'=>'required',
        ]);
        //create a new property unit
        $unit = PropertyUnit::create([
            'Unit_title'=>$request->Unit_title,
            'Rent'=>$request->Rent,
            'status'=>$request->status,
            'Initial_deposit'=>$request->Initial_deposit,
            'description'=>$request->description,
            'property_id'=>$request->property_id,
            'created_by'=>$user->id
        ]);
        //return the newly created property unit
        return (new PropertyUnitResource($unit))->response()->setStatusCode(Response::HTTP_CREATED);

    }
    //updating a property unit
    public function UpdateUnit (Request $request, PropertyUnit $id){
       //gettting the property unit using propertyUnit repository
       $unit = new PropertyUnitResource($id);
       //update specific unit
         $unit->update($request->all());
            //return the updated property unit
            return ($unit)->response()->setStatusCode(Response::HTTP_ACCEPTED);
    }
    //deleting a property unit
    public function DestroyUnit (PropertyUnit $id){
        //gettting the property unit using propertyUnit repository
        $unit = new PropertyUnitResource($id);
        //delete specific unit
        $unit->delete();
        //return the deleted property unit
        return ($unit)->response()->setStatusCode(Response::HTTP_ACCEPTED);
    }
    
}
