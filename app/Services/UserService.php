<?php


namespace App\Services;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;

class UserService
{
    public function CreateDefaultUser(Request $request){
        $role= Role::find(3);
        $request->validate([
            'Full_name'=>'required',
            'Email'=>'string|string|max:255|Email|unique:users,Email',
            'NIN'=>'required',
            'password'=>'required'
        ]);
       printf ($role);
        // $ole= $role->id;
        // $user =User::create([
        //     'Full_name'=>$request->Full_name,
        //     'Email'=>$request->Email,
        //     'NIN'=>$request->NIN,
        //     'password'=>$request->password,
        //     'role_id'=>$ole
        // ]);
        //     return (new UserResource($user))->response()->setStatusCode(Response::HTTP_CREATED);

    }
    public function GetAllUsers (){
        return new UserCollection(User::all());
    }
    public function UpdateUser(Request $request, User $id){
        $landl = new UserResource($id);
        $landl->update($request->all());
        return ($landl)->response()->setStatusCode(Response::HTTP_ACCEPTED); 
    }
    public function destroy(User $id){
        $id->delete();
        return response("Successfully Deleted User", Response::HTTP_OK);
    }
}
