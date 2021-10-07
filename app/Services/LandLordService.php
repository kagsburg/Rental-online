<?php


namespace App\Services;

use App\Http\Resources\UserResource;
use App\Http\Resources\LandlordResource;
use App\Http\Resources\UserCollection;
use App\Models\LandLord;
use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class LandLordService
{
    public function getLandLords(){

        return new UserCollection(User::where('role_id','2')->get());
    }
    public function CreateLandlords(Request $request){
        $role= Role::find(2);
        $request->validate([
            'Full_name'=>'required',
            'Email'=>'string|string|max:255|email|unique:users,email',
            'Address'=>'required',
            'NIN'=>'required',
            'password'=>'required'
        ]);
       
        $ole= $role->id;
        $user =User::create([
            'Full_name'=>$request->Full_name,
            'Email'=>$request->Email,
            'Address'=>$request->Address,
            'NIN'=>$request->NIN,
            'password'=>$request->password,
            'role_id'=>$ole
        ]);
            return (new UserResource($user))->response()->setStatusCode(Response::HTTP_CREATED);

    }
    public function UpdateLandlords(Request $request, User $id){
        $landl = new UserResource($id);
        $landl->update($request->all());
        return ($landl)->response()->setStatusCode(Response::HTTP_ACCEPTED); 
    }
    public function destroy(User $id){
        $id->delete();
        return response("Successfully Deleted", Response::HTTP_OK);
    }

}
