<?php

namespace App\Http\Controllers;

use App\Services\TenantService;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    //
    private $TenantService;

    public function __construct(TenantService $TenantService)
    {
        $this->TenantService = $TenantService;
    }
    //get all tenants 
    public function getAllTenants(Request $request)
    {
        return $this->TenantService->getAllTenants($request);
    }
}
