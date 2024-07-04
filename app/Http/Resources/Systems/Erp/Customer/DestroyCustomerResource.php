<?php

namespace App\Http\Resources\Systems\Erp\Customer;

use Illuminate\Http\Resources\Json\JsonResource;

class DestroyCustomerResource extends JsonResource
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
            'id' => $request['id']
        ];
    }
}
