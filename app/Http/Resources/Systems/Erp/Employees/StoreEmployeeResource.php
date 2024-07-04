<?php

namespace App\Http\Resources\Systems\Erp\Employees;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreEmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        if (isset($this->resource['errors'])) {
            return [
                'errors' => $this->resource['errors']
            ];
        }

        return [
            'original' => [
                'id' => $this->resource->id,
                'name-collaborator' => $this->resource->userKey->name,
                'telephone' => $this->resource->telephone,
                'email' => $this->resource->userKey->email,
                'employee_roles_select' => $this->resource->employee_roles_id . '/' . $this->resource->employeeRoles->name,
            ],
            'parameters' => [
                'street' => $this->resource->street,
                'number' => $this->resource->number,
                'district' => $this->resource->district,
                'city' => $this->resource->city,
                'state' => $this->resource->state,
                'employee_roles_id' => $this->resource->employee_roles_id,
                'cpf' => $this->resource->cpf,
                'bill' => $this->resource->bill,
                'agency' => $this->resource->agency,
                'operation' => $this->resource->operation,
                'permissions_select' => json_encode($this->resource->permissions, true),
            ]
        ];
    }
}
