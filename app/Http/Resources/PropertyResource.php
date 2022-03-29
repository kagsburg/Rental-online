<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\PropertyType;
use App\Models\User;
class PropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       
        return [
            'id'=> $this->id,
            'Property_name' => $this->Property_name,
            'Rent_amount' => $this->Rent_amount,
            'Location'=>$this->Location,
            'Type_id' => PropertyType::find($this->Type_id)->first(['category_name'])->category_name,
            'landlord_id'=>User::find($this->landlord_id)->first(['Full_name'])->Full_name
        ];
    }
    public function with($request)
    {
        return ['status' => 'success'];
    }
}
