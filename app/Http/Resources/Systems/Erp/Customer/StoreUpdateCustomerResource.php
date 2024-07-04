<?php

namespace App\Http\Resources\Systems\Erp\Customer;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreUpdateCustomerResource extends JsonResource
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
                'telephone' => $request['telephone'],
                'email' => $request['email'],
            ];
        }
        
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'telephone' => $this->resource->telephone,
            'email' => $this->resource->email,
        ];
    }
}
