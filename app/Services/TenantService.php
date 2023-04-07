<?php


namespace App\Services;
use App\Http\Resources\UserResource;
use App\Http\Resources\LandlordResource;
use App\Http\Resources\UserCollection;
use Laravel\Sanctum\PersonalAccessToken;
use App\Models\Role;
use App\Models\User;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\TenantResource;
use App\Http\Resources\TenantCollection;
class TenantService
{
    //get all tenants based on a specific landlord
    public function getAllTenants(Request $request)
    {
        //get landlord id from token 
         $token = PersonalAccessToken::findToken($request->bearerToken());
         $user= $token->tokenable; 
         
            $result = Tenant::where('Landlord_id','=',$user->id)
            ->join('users','users.id','=','tenants.tenant_id')
            ->select('users.id as TenantId','users.Full_name as TenantName','users.email as TenantEmail')
            ->get();    
        // return $result;
        return (new TenantCollection($result))->response()->setStatusCode(Response::HTTP_OK);
    }
    //add New Tenant leases to a specific landlord
    public function addNewTenantLeases(Request $request)
    {
        //get landlord id from token 
        $token = PersonalAccessToken::findToken($request->bearerToken());
        $user= $token->tokenable; 
        $request->validate([
            'tenant_id'=>'required',
        ]);
        //check if tenant exists for the landlord
        $tenant = Tenant::where('tenant_id','=',$request->tenant_id)
        ->where('Landlord_id','=',$user->id)
        ->first();
        if($tenant){
            //if tenant exists for the landlord
           
            }else{
                //if tenant does not exist for the landlord
                //create tenant for the landlord
                 Tenant::create([
                    'tenant_id'=>$request->tenant_id,
                    'Landlord_id'=>$user->id,
                ]);
            }
    }
    
}
