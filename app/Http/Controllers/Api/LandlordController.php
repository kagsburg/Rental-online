<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LandlordResource;
use App\Http\Resources\LandlordResourceCollection;
use App\Models\Landlord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
class LandlordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = Landlord::paginate();
    return (new LandlordResourceCollection($users))->response();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $validator = Validator::make(
        //     ['Full_name'=>'required'],
        //     ['Email'=>'string|min:1|max:10'],
        //     ['Address'=>'required'],
        //     ['NIN'=>'required']);
        $request->validate([
            'Full_name'=>'required',
            'Email'=>'string|string|max:255|email|unique:landlords,email',
            'Address'=>'required',
            'NIN'=>'required'
        ]);
        $user =Landlord::create($request->all());
            return (new LandlordResource($user))->response()->setStatusCode(Response::HTTP_CREATED);
            // if () {
            //     return (new LandlordResource($validator))->response()->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
            //     // return response()->json([
            //     //     "error" => 'validation_error',
            //     //     "message" => $validator->errors(),
            //     // ], 422);
            // }else{
            //     $user =Landlord::create($request->all());
            //     return (new LandlordResource($user))->response()->setStatusCode(Response::HTTP_CREATED);
            //     // return response()->json([
            //     //     'status'=>200,
            //     //     'message'=> ' New LandLord Record created'
            //     // ]);
            // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function show(Landlord $id)
    {
        //
        return (new LandlordResource($id))->response();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Landlord $id)
    {
        //
        // $request->validate([
        //     'Full_name'=>'required',
        //     'Email'=>'string|string|max:255|email|unique:landlords,email',
        //     'Address'=>'required',
        //     'NIN'=>'required'
        // ]);
        $landl = new LandlordResource($id);
        $landl->update($request->all());
        return ($landl)->response()->setStatusCode(Response::HTTP_ACCEPTED);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landlord $landlord)
    {
        //
        $landlord->delete();   
         return response(null, Response::HTTP_NO_CONTENT);
    }
}
