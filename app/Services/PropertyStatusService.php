<?php


namespace App\Services;

use App\Http\Resources\PropertyStatusResource;
use App\Http\Resources\PropertyStatusCollection;
use App\Models\PropertyStatus;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class PropertyStatusService
{

    public function getStatus(){

        return new PropertyStatusCollection(PropertyStatus::all());
    }
    public function CreateStatus(Request $request){
        
        $request->validate([
            'status_name'=>'required',
            'description'=>'required'
        ]);
        $user =PropertyStatus::create($request->all());
            return (new PropertyStatusResource($user))->response()->setStatusCode(Response::HTTP_CREATED);

    }
    public function UpdateStatus(Request $request, PropertyStatus $id){
        $landl = new PropertyStatusResource($id);
        $landl->update($request->all());
        return ($landl)->response()->setStatusCode(Response::HTTP_OK); 
    }
    public function destroy(PropertyStatus $id){
        $id->delete();
        return response("Property Status Successfully Deleted", Response::HTTP_OK);
    }


}
