<?php

namespace App\Http\Resources\Systems\Erp\Services;

use Illuminate\Http\Resources\Json\JsonResource;

class ServicesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'name_service' => $this->resource->name_service,
            'valor_service' => $this->resource->valor_service,
        ];
    }
}
