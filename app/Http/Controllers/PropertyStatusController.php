<?php

namespace App\Http\Controllers;

use App\Http\Resources\PropertyStatusResource;
use App\Http\Resources\PropertyStatusCollection;
use App\Models\PropertyStatus;
use App\Services\PropertyStatusService;
use Illuminate\Http\Request;

class PropertyStatusController extends Controller
{
    //
    private $statusService;

    public function __construct(PropertyStatusService $statusService)
    {
        $this->statusService = $statusService;
    }
//get all statuses
    public function getAllStatus()
    {
        return $this->statusService->getStatus();
    }
//get specific status
    public function get_Status(PropertyStatus $id): PropertyStatusResource
    {
        return new PropertyStatusResource($id);
    }
//create new status
    public function storeStatus(Request $request){
            return $this->statusService->CreateStatus($request);

    }
//update  status information
    public function updateStatus(Request $request, PropertyStatus $id){
        return $this->statusService->UpdateStatus($request,$id);
    }
//delete roles
    public function deleteStatus(PropertyStatus $id){
        return $this ->statusService->destroy($id);
    }
}
