<?php


namespace App\Services;

use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\PropertyTypeResource;
use App\Http\Resources\PropertyTypeCollection;

class PropertyTypeService
{

    public function getAllTypes(){

        return new PropertyTypeCollection(PropertyType::all());
    }
    public function createTypes(Request $request){
        
        $request->validate([
            'category_name'=>'required',
            'description'=>'required'
        ]);
        $user =PropertyType::create($request->all());
            return (new PropertyTypeResource($user))->response()->setStatusCode(Response::HTTP_CREATED);

    }
    public function updateTypes(Request $request, PropertyType $id){
        $landl = new PropertyTypeResource($id);
        $landl->update($request->all());
        return ($landl)->response()->setStatusCode(Response::HTTP_OK); 
    }
    public function destroy(PropertyType $id){
        $id->delete();
        return response("Property Type Successfully Deleted", Response::HTTP_OK);
    }
}
