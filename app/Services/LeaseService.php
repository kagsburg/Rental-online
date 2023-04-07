<?php


namespace App\Services;

use App\Http\Resources\LeaseCollection;
use App\Http\Resources\LeaseResource;
use App\Models\Lease;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Sanctum\PersonalAccessToken;
use App\Services\TenantService;

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
        // return $request->all();
        //if validation is successful
        if ($request->hasFile('document')) {
            $doc= $request->file('document')->store('document');
        }else{
            $doc = null;
        }

        $lease = Lease::create([
            'type_id'=>$request->type_id,
            'unit_id'=>$request->unit_id,
            'tenant_id'=>$request->tenant_id,
            'status'=>$request->status,
            'lease_start'=>$request->lease_start,
            'lease_end'=>$request->lease_end,
            'document'=>$doc,
            // 'created_by'=>$request->created_by,
        ]);
        $tenant = new TenantService();
        $tenant->addNewTenantLeases($request);
        // if ($request->hasFile('lease_doc')) {
           
        //     $formfeilds['document'] = $request->file('lease_doc')->store('lease_doc');
        // }
        // $lease =Lease::create($formfeilds);
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
