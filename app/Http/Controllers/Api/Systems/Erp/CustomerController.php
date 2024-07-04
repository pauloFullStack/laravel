<?php

namespace App\Http\Controllers\Api\Systems\Erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpCustomersService;
use App\Http\Resources\Systems\Erp\Customer\StoreUpdateCustomerResource;
use App\Http\Resources\Systems\Erp\Customer\DestroyCustomerResource;
use App\Http\Requests\Systems\Erp\Customer\StoreCustomerRequest;
use App\Http\Requests\Systems\Erp\Customer\UpdateCustomerRequest;

class CustomerController extends Controller
{

    /**
     * @var ErpServicesService
     */
    protected $service;


    public function __construct(
        ErpCustomersService $service
    ) {
        $this->service = $service;
    }

    /**
     * @param App\Http\Requests\Systems\Erp\Customer\StoreCustomerRequest $request
     * @return array
     */
    public function storeCustomer(StoreCustomerRequest $request)
    {
        return new StoreUpdateCustomerResource(
            $this->service->store($request->all())
        );
    }
    
    /**
     * @param App\Http\Requests\Systems\Erp\Customer\UpdateCustomerRequest $request
     * @return array
     */
    public function updateCustomer(UpdateCustomerRequest $request)
    {
        return new StoreUpdateCustomerResource(
            $this->service->update($request->all())
        );
    }

    /**
     * @param string $id
     * @return array
    */
    public function destroyCustomer($id)
    {
        return new DestroyCustomerResource(
            $this->service->delete($id)
        );
    }
}
