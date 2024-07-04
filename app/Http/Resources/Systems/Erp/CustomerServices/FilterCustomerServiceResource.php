<?php

namespace App\Http\Resources\Systems\Erp\CustomerServices;

use Illuminate\Http\Resources\Json\JsonResource;

class FilterCustomerServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        //Acabei 
        if (isset($this->resource->id)) {
            return [
                'created_at' => $this->resource->created_at->format('d/m/Y'),
                'customers_id' => $this->resource->customers_id,
                'id' => $this->resource->id,
                'payment_date' => isset($this->resource->payment_date) ? $this->resource->payment_date->format('d/m/Y') : 'Não Informado',
                'payment_status_id' => $this->resource->payment_status_id,
                'namePaymentStatus' => $this->resource->paymentStatus->name,
                'service_delivery_date' => isset($this->resource->service_delivery_date) ? $this->resource->service_delivery_date->format('d/m/Y') : 'Não Informado',
                'status_service_id' => $this->resource->status_service_id,
                'nameServiceStatus' => $this->resource->statusService->name,
                'services_id' => $this->resource->services_id,
                'nameService' => $this->resource->service->name_service,
                'valor_service' => $this->resource->valor_service,
                'telephone' => $this->resource->customer->telephone,
                'responsible_collaborator_name' => $this->resource->responsible->name,
                'responsible_collaborator_id' => $this->resource->responsible->id,
            ];
        }

        if (is_null($request['erro'])) {
            return "search does not exist";
        }
    }
}
