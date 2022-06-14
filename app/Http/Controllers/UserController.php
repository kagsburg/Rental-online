<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Services\UserService;
class UserController extends Controller
{
    //
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function storeUser(Request $request){
        return $this->userService->CreateDefaultUser($request);
    }
    //update user's role
    public function setNewRole(Request $request, User $id){
        return $this->userService->setUserRole($request, $id);
    }
    public function getAllUsers(){
        return $this->userService->GetAllUsers();

    }
}
