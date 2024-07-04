<?php

namespace App\Http\Resources\Systems\Erp\Services;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreUpdateServicesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (isset($request['id'])) {
            return [
                'id' => $request['id'],
                'name_service' => $request['name_service'],
                'valor_service' => $request['valor_service'],
                'note_service' => $request['note_service'],
            ];
        } else {
            return [
                'id' => $this->resource->id,
                'name_service' => $this->resource->name_service,
                'valor_service' => $this->resource->valor_service,
                'note_service' => $this->resource->note_service,
            ];
        }
    }
}
