<?php

namespace App\Http\Resources\Systems\Erp\Employees;

use Illuminate\Http\Resources\Json\JsonResource;

class UpdateDataBasicEmployeeResource extends JsonResource
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
            'id' => $this->resource->id,
            'name-collaborator' => $this->resource->userKey->name,
            'telephone' => $this->resource->telephone,
            'email' => $this->resource->userKey->email,
            'employee_roles_select' => $this->resource->employeeRoles->id . '/' . $this->resource->employeeRoles->name,
            'permissions_select' => json_encode($this->resource->permissions, true),
        ];
    }
}
