<?php

namespace App\Http\Resources\Systems\Erp\CustomerServices;

use Illuminate\Http\Resources\Json\JsonResource;

class UpdateCustomerServiceResource extends JsonResource
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
            'idService' => $this->resource->id,
            'id' => $this->resource->customers_id,
            'paymentDate' => isset($this->resource->payment_date) ? $this->resource->payment_date->format('d/m/Y') : 'Não Informado',
            'serviceDeliveryDate' => isset($this->resource->service_delivery_date) ? $this->resource->service_delivery_date->format('d/m/Y') : 'Não Informado',
            'paymentStatusId' => $this->resource->payment_status_id,
            'paymentStatusName' => $this->resource->paymentStatus->name,
            'statusServiceId' => $this->resource->status_service_id,
            'statusServiceName' => $this->resource->statusService->name,
            'serviceId' => $this->resource->services_id,
            'serviceName' => $this->resource->service->name_service,
            'valorService' => $this->resource->valor_service,
            'responsible_collaborator_name' => $this->resource->responsible->name,
            'responsible_collaborator_id' => $this->resource->responsible->id,
        ];
    }
}
