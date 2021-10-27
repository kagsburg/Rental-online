<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PropertyService;
use App\Http\Resources\PropertyResource;
use App\Models\Property;

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
//add new type
    public function storeProperty(Request $request){
        return $this->propertyService-> createProperty($request);

    }
// //get specific property type
//     public function getType(Request $request){
//             return $this->typeService->Create_Roles($request);

//     }
//update  type information
    public function updateProperty(Request $request, Property $id){
        return $this->propertyService->updateProperty($request,$id);
    }
//delete property type
    public function deleteProperty(Property $id){
        return $this ->propertyService->destroy($id);
    }
}
