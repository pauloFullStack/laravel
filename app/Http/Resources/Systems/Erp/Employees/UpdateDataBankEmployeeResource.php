<?php

namespace App\Http\Resources\Systems\Erp\Employees;

use Illuminate\Http\Resources\Json\JsonResource;

class UpdateDataBankEmployeeResource extends JsonResource
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
                'agency' => $this->resource->agency,
                'bill' => $this->resource->bill,
                'cpf' => $this->resource->cpf,
                'operation' => $this->resource->operation
            ]
        ];
    }
}
