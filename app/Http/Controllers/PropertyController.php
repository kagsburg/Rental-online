<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PropertyService;
use App\Http\Resources\PropertyResource;
use App\Models\Property;
use App\Models\User;

class PropertyController extends Controller
{
    //
    private $propertyService;

    public function __construct(PropertyService $propertyService)
    {
        $this->propertyService = $propertyService;
    }
    //get all property
    public function getAll()
    {
        return $this->propertyService->getAllProperty();
    }
    //get specific type
    public function getOneProperty(Property $id): PropertyResource
    {
        return new PropertyResource($id);
    }
    public function getPropertyPerLandlord (Request $request){
        return $this->propertyService->getLandlordProperty($request);
    }
//add new type
    public function storeProperty(Request $request){
        return $this->propertyService-> createProperty($request);

    }
//update  type information
    public function updateProperty(Request $request, Property $id){
        return $this->propertyService->updateProperty($request,$id);
    }
//delete property type
    public function deleteProperty(Property $id){
        return $this ->propertyService->destroy($id);
    }
}
