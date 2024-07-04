<?php

namespace App\Http\Resources\Systems\Erp\CustomerServices;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageDeleteResource extends JsonResource
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
            'message' => $this->resource['message'],
        ];
    }
}
