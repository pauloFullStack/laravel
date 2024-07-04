<?php

namespace App\Http\Controllers\Api\Systems\Erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpCustomersServicesService;
use App\Http\Resources\Systems\Erp\CustomerServices\UpdateCustomerServiceResource;
use App\Http\Resources\Systems\Erp\CustomerServices\StoreCustomerServiceResource;
use App\Http\Resources\Systems\Erp\CustomerServices\MessageDeleteResource;
use App\Http\Resources\Systems\Erp\CustomerServices\DestroyCustomerServiceResource;
use App\Http\Resources\Systems\Erp\CustomerServices\UpdateWorkStatusResource;
use App\Http\Resources\Systems\Erp\CustomerServices\FilterCustomerServiceResource;
use App\Http\Requests\Systems\Erp\CustomerServices\StoreCreateServiceCustomerRequest;
use App\Http\Requests\Systems\Erp\CustomerServices\UpdateServiceCustomerRequest;
use Illuminate\Http\Request;

class CustomerServiceController extends Controller
{

    /**
     * @var ErpCustomersServicesService
     */
    protected $service;


    public function __construct(
        ErpCustomersServicesService $service
    ) {
        $this->service = $service;
    }

    /**
     * 
     * @param App\Http\Requests\Systems\Erp\CustomerServices\StoreCreateServiceCustomerRequest $request
     * @return array
     */
    public function storeCustomerService(StoreCreateServiceCustomerRequest $request)
    {
        return new StoreCustomerServiceResource(
            $this->service->store($request->all())
        );
    }

    /**
     * @param App\Http\Requests\Systems\Erp\CustomerServices\UpdateServiceCustomerRequest $request
     * @return array
     */
    public function updateCustomerService(UpdateServiceCustomerRequest $request)
    {
        return new UpdateCustomerServiceResource(
            $this->service->update($request->all())
        );
    }


    /**
     * @param int $id
     * @return array
     */
    public function checkServicesCustomer($id)
    {

        return new MessageDeleteResource(
            $this->service->checkServices($id, 'customers_id')
        );
    }

    /** 
     * @param int $id
     * @return array
     */
    public function checkServicesResponsibleCollaborator($id)
    {
        return new MessageDeleteResource(
            $this->service->checkServices($id, 'responsible_collaborator')
        );
    }



    /**
     * @param Illuminate\Http\Request $request
     * @return array
     */
    public function myWorksStatusUpdate(Request $request)
    {
        return new UpdateWorkStatusResource(
            $this->service->myWorksStatusUpdate($request->all())
        );

    }


    /**
     * @param string $id
     * @return array
    */
    public function destroyCustomerService($id)
    {
        return new DestroyCustomerServiceResource(
            $this->service->delete($id)
        );
    }

    /**
     * 
     * @param int $paymentStatus
     * @param int $serviceStatus
     * @param int $serviceType
     * @param string $idCustomer
     * @return array
     */
    public function filterCustomerService($paymentStatus, $serviceStatus, $serviceType, $idCustomer)
    {
        return FilterCustomerServiceResource::collection(
            $this->service->getFilter($paymentStatus, $serviceStatus, $serviceType, $idCustomer)
        );
    }
}
