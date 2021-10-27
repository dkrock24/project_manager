<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
            'logo' => $resource->logo,
            'status' => $resource->status,
            'description' => $resource->description,
            'country_id' => $resource->country_id
        ];

        if ($resource->relationLoaded('countries')) {
            $result['country'] = $resource->countries;
        } else {
            $result['country'] = [];
        }

        return $result;
    }
}
