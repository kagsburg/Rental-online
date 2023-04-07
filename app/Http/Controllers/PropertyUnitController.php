<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PropertyUnitService;
use App\Models\PropertyUnit;
use App\Http\Resources\PropertyUnitResource;


class PropertyUnitController extends Controller
{
    //
    private $propertyUnitService;

    public function __construct(PropertyUnitService $propertyUnitService)
    {
        $this->propertyUnitService = $propertyUnitService;
    }
        //get all property Units
        public function getAllPropertyUnits(Request $request)
        {
            return $this->propertyUnitService->GetAllUnits($request);
        }
        //create new property unit
        public function createPropertyUnit(Request $request){
            return $this->propertyUnitService->CreateUnit($request);
        }
        //get specific property unit
        public function getOnePropertyUnit(PropertyUnit $id): PropertyUnitResource
        {
            return new PropertyUnitResource($id);
        }
        //update property unit
        public function updatePropertyUnit(Request $request, PropertyUnit $id){
            return $this->propertyUnitService->UpdateUnit($request,$id);
        }
        //delete property unit
        public function deletePropertyUnit(PropertyUnit $id){
            return $this ->propertyUnitService->DestroyUnit($id);
        }
        //get all property units per given property
        public function getUnitsPerProperty(Request $request, $property_id){
            return $this->propertyUnitService->getUnitsPerProperty($request,$property_id);
        }
}
