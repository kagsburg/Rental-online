<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PropertyCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public $collects = 'App\Http\Resources\PropertyResource';
    public function toArray($request)
    {
        return $this->collection;

    }
    public function with($request)
    {
        return ['status' => 'success'];
    }
}
