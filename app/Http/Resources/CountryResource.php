<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
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
            'flag' => $resource->flag,
            'status' => $resource->status,
            'description' => $resource->description,
            'currency_id' => $resource->currency_id
        ];

        if ($resource->relationLoaded('currencies')) {
            $result['currency'] = $resource->currencies;
        } else {
            $result['currency'] = [];
        }

        return $result;
    }
}
