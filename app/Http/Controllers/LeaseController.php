<?php

namespace App\Http\Controllers;

use App\Services\LeaseService;
use Illuminate\Http\Request;
use App\Models\Lease;

class LeaseController extends Controller
{
    //
    private $leaseService;
    public function __construct(LeaseService $leaseService){
        $this->leaseService = $leaseService;

    }

    public function AddNewLeases(Request $request){
        return $this->leaseService->CreateNewLease($request);
    }
    public function Landlordleases(Request $request){
        return $this->leaseService->getLeasesPerlandlord($request);
    }
    //update tenant's lease
    public function UpdateTenantLease(Request $request, Lease $id){
        return $this->leaseService->UpdateLease($request,$id);
    }
    
}
