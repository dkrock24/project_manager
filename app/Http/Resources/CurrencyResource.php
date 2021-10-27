<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CurrencyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $resource = $this->resource;
        
        $result =  [
            'id' => $resource->id,
            'name' => $resource->name,
            'simbol' => $resource->flag,
            'status' => $resource->status,
        ];

        return $result;
    }
}
