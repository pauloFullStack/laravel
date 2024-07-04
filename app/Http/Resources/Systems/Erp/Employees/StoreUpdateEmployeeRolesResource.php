<?php

namespace App\Http\Resources\Systems\Erp\Employees;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreUpdateEmployeeRolesResource extends JsonResource
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
                'name' => $request['name'],
            ];
        }
        
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'roles' => true,
        ];
    }
}
