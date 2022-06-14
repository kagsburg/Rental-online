<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeaseResource extends JsonResource
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
            'type_id' => $this->type_id,
            'unit_id' => $this->unit_id,
            'tenant_id'=>$this->tenant_id,
            'status' => $this->status,
            'lease_start'=> $this->lease_start,
            'lease_end'=> $this->lease_end,
        ];
       
    }
    public function with($request)
    {
        return ['status' => 'success'];
    }
}
