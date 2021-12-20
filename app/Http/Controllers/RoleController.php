<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\RoleResource;
use App\Models\Role;
use App\Services\RoleService;

class RoleController extends Controller
{
    //
  private $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }
//get all roles
    public function getRoles()
    {
        return $this->roleService->get_Roles();
    }
//get specific role
    public function getRole(Role $id): RoleResource
    {
        return new RoleResource($id);
    }
//create new role
    public function storeRoles(Request $request){
            return $this->roleService->Create_Roles($request);

    }
//update  role information
    public function update_role(Request $request, Role $id){
        return $this->roleService->UpdateRoles($request,$id);
    }
//delete roles
    public function delete_role(Role $id){
        return $this ->roleService->destroy($id);
    }  
    public function delete_all_role( $id){
        return $this ->roleService->destroyAll($id);
    } 
}
