<?php

namespace App\Http\Resources\Systems\Erp\CustomerServices;

use Illuminate\Http\Resources\Json\JsonResource;

class UpdateWorkStatusResource extends JsonResource
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
            'work_status' => $this->resource->work_status,
        ];
    }
}
