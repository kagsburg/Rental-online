<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Property;
use App\Models\PropertyStatus;

class PropertyUnitResource extends JsonResource
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
            'id'=>$this->id,
            'UnitTitle' => $this->Unit_title,
            'RentAmt' => $this->Rent,
            'UnitStatus' => $this->status ? PropertyStatus::find($this->status)->first(['status_name'])->status_name : '',
            'initialDeposit' => $this->initial_deposit,
            'description' => $this->description,
            'propertyName' =>$this->property_id ? Property::find($this->property_id)->first(['Property_name'])->Property_name: '',  

        ];
    }
    public function with($request)
    {
        return ['status' => 'success'];
    }
}
