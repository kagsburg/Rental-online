<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'Full_name' => $this->Full_name,
            'Email' => $this->Email,
            'Address'=>$this->Address,
            'role_id' => RoleResource::collection($this->whenLoaded('roles')),
            'Id Number'=>$this->NIN
        ];
    }
    public function with($request)
    {
        return ['status' => 'success'];
    }
}
