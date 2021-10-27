<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PropertyTypeService;
use App\Http\Resources\PropertyTypeResource;
use App\Models\PropertyType;

class PropertyTypeController extends Controller
{
    //
    private $typeService;

    public function __construct(PropertyTypeService $typeService)
    {
        $this->typeService = $typeService;
    }
    //get all types
    public function getAlltype()
    {
        return $this->typeService->getAllTypes();
    }
    //get specific type
    public function getType(PropertyType $id): PropertyTypeResource
    {
        return new PropertyTypeResource($id);
    }
//add new type
    public function storeType(Request $request){
        return $this->typeService-> createTypes($request);

    }
// //get specific property type
//     public function getType(Request $request){
//             return $this->typeService->Create_Roles($request);

//     }
//update  type information
    public function updateType(Request $request, PropertyType $id){
        return $this->typeService->updateTypes($request,$id);
    }
//delete property type
    public function deleteType(PropertyType $id){
        return $this ->typeService->destroy($id);
    }
}
