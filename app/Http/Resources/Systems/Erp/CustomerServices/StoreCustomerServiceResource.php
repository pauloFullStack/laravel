<?php

namespace App\Http\Resources\Systems\Erp\CustomerServices;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreCustomerServiceResource extends JsonResource
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
            'parameters' => [
                'created_at' => $this->resource->created_at->format('d/m/Y'),
                'customers_id' => $this->resource->customers_id,
                'payment_date' => isset($this->resource->payment_date) ? $this->resource->payment_date->format('d/m/Y') : 'Não Informado',
                'payment_status_id' => $this->resource->payment_status_id,
                'service_delivery_date' => isset($this->resource->service_delivery_date) ? $this->resource->service_delivery_date->format('d/m/Y') : 'Não Informado',
                'status_service_id' => $this->resource->status_service_id,
                'services_id' => $this->resource->services_id,
                'telephone' => $this->resource->customer->telephone,
                'service_add_id' => $this->resource->id,
                'responsible_collaborator_id' => $this->resource->responsible->id,
            ],
            'original' => [
                'id' => $this->resource->id,
                'name_service' => $this->resource->service->name_service,
                'name_service_status' => $this->resource->statusService->name,
                'valor_service' => $this->resource->valor_service,
                'name_payment_status' => $this->resource->paymentStatus->name,
                'responsible_collaborator_name' => $this->resource->responsible->name,
            ],
        ];
    }
}
