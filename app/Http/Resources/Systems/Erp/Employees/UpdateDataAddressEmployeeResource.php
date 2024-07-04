<?php

namespace App\Http\Resources\Systems\Erp\Employees;

use Illuminate\Http\Resources\Json\JsonResource;

class UpdateDataAddressEmployeeResource extends JsonResource
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
            'hidden_update' => [
                'id' => $this->resource->id,
                'street' => $this->resource->street,
                'district' => $this->resource->district,
                'number' => $this->resource->number,
                'city' => $this->resource->city,
                'state' => $this->resource->state
            ]
        ];
    }
}
