<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LandlordResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
       /**
     * The "data" wrapper that should be applied.
     *
     * @var string
     */
    public static $wrap = 'landlord';
    public function toArray($request)
    {
        // return [
        //     // 'id' => $this->id,
        //     'Name' => $this->Full_name,
        //     'Email' => $this->Email,
        // ];
         return parent::toArray($request);
    }
    public function with($request)
    {
        return ['status' => 'success'];
    }
}
