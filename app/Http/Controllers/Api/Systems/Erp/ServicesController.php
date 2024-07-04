<?php

namespace App\Http\Controllers\Api\Systems\Erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpServicesService;
use App\Http\Resources\Systems\Erp\Services\StoreUpdateServicesResource;
use App\Http\Resources\Systems\Erp\Services\DestroyServicesResource;
use App\Http\Requests\Systems\Erp\Services\StoreServiceRequest;
use App\Http\Requests\Systems\Erp\Services\UpdateServiceRequest;

class ServicesController extends Controller
{

    /**
     * @var ErpServicesService
     */
    protected $service;


    public function __construct(
        ErpServicesService $service
    ) {
        $this->service = $service;
    }

    /**
     * @param App\Http\Requests\Systems\Erp\StoreServiceRequest $request
     * @return array
     */
    public function storeService(StoreServiceRequest $request)
    {
        return new StoreUpdateServicesResource(
            $this->service->store($request->all())
        );
    }

    /**
     * @param App\Http\Requests\Systems\Erp\UpdateServiceRequest $request
     * @return array
     */
    public function updateService(UpdateServiceRequest $request)
    {
        return new StoreUpdateServicesResource(
            $this->service->update($request->all())
        );
    }

    /**
     * @param int $id
     * @return array
     */
    public function destroyService($id)
    {
        return new DestroyServicesResource(
            $this->service->delete($id)
        );
    }
}
