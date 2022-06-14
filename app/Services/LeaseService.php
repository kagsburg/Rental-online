<?php


namespace App\Services;

use App\Http\Resources\LeaseCollection;
use App\Http\Resources\LeaseResource;
use App\Models\Lease;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Sanctum\PersonalAccessToken;

class LeaseService
{

    public function getStatus(){

        return new LeaseCollection(Lease::all());
    }
    public function CreateNewLease(Request $request){
        
        $request->validate([
            'type_id'=>'required',
        'unit_id'=>'required',
        'tenant_id'=>'required',
        'lease_start'=>'required',
        'lease_end'=>'required',            
        ]);
        $lease =Lease::create($request->all());
            return (new LeaseResource($lease))->response()->setStatusCode(Response::HTTP_CREATED);

    }
    //getting all landlord leases
    public function getLeasesPerlandlord(Request $request){       
        $token = PersonalAccessToken::findToken($request->bearerToken());
        $user= $token->tokenable;
        $land=Lease::join('properties','properties.id','=','leases.unit_id')
        ->where('properties.landlord_id','=',$user->id)
        ->select('leases.*')
        ->get();
        return new LeaseCollection($land);
        // return $land;
    }
    //updating tenant's lease
    public function UpdateLease(Request $request, Lease $id){
        $lease= new LeaseResource($id);
        $lease-> update($request->all());
        return ($lease)->response()->setStatusCode(Response::HTTP_OK);
    }
    //delete lease
    public function DeleteLease(Lease $id){
        $landl = new LeaseResource($id);
        $landl->delete();
        return ($landl)->response()->setStatusCode(Response::HTTP_OK); 
    }



}
