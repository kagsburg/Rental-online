<?php


namespace App\Services;

use App\Http\Resources\RoleResource;
use App\Http\Resources\RoleResourceCollection;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class RoleService
{

    public function get_Roles(){
         return new RoleResourceCollection(Role::all());
        // $data['data']= $coolection->sortByDesc('id');
        // return $data;
    }
    public function Create_Roles(Request $request){
        
        $request->validate([
            'role_name'=>'required',
            'description'=>'required'
        ]);
        $user =Role::create($request->all());
            return (new RoleResource($user))->response()->setStatusCode(Response::HTTP_CREATED);

    }
    public function UpdateRoles(Request $request, Role $id){
        $landl = new RoleResource($id);
        $landl->update($request->all());
        return ($landl)->response()->setStatusCode(Response::HTTP_OK); 
    }
    public function destroy(Role $id){
        $id->delete();
        return response("Role Successfully Deleted", Response::HTTP_OK);
    }
    public function destroyAll($id){
        try {
                
            $ids = explode(",", $id);
            //print_r($ids);
            //$ids is a Array with the primary keys
            Role::destroy($ids);
            return response("Roles Successfully Deleted", Response::HTTP_OK);
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }

    }


}
