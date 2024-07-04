<?php

namespace App\Http\Resources\Systems\Erp\CustomerServices;

use Illuminate\Http\Resources\Json\JsonResource;

class DestroyCustomerServiceResource extends JsonResource
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
