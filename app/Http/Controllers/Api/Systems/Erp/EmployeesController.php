<?php

namespace App\Http\Controllers\Api\Systems\Erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpEmployeesService;
use App\Http\Resources\Systems\Erp\Employees\StoreEmployeeResource;
use App\Http\Resources\Systems\Erp\Employees\UpdateDataBasicEmployeeResource;
use App\Http\Resources\Systems\Erp\Employees\UpdateDataBankEmployeeResource;
use App\Http\Resources\Systems\Erp\Employees\UpdateDataAddressEmployeeResource;
use App\Http\Resources\DestroyGenericResource;
use App\Http\Requests\Systems\Erp\Employee\StoreEmployeeRequest;
use App\Http\Requests\Systems\Erp\Employee\UpdateEmployeeBasicRequest;
use App\Http\Requests\Systems\Erp\Employee\UpdateEmployeeAddressRequest;
use App\Http\Requests\Systems\Erp\Employee\UpdateEmployeeBankRequest;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    /**
     * @var ErpEmployeesService
     */
    protected $service;


    public function __construct(
        ErpEmployeesService $service
    ) {
        $this->service = $service;
    }

    /**
     * @param App\Http\Requests\Systems\Erp\StoreEmployeeRequest $request
     * @return array
     */
    public function store(StoreEmployeeRequest $request)
    {
        return new StoreEmployeeResource(
            $this->service->store($request->all())
        );
    }

    /**
     * @param App\Http\Requests\Systems\Erp\UpdateEmployeeBasicRequest $request
     * @return array
     */
    public function updateBasic(UpdateEmployeeBasicRequest $request)
    {
        return new UpdateDataBasicEmployeeResource(
            $this->service->update($request->all())
        );
    }


    /**
     * @param App\Http\Requests\Systems\Erp\UpdateEmployeeAddressRequest $request
     * @return array
     */
    public function updateAddress(UpdateEmployeeAddressRequest $request)
    {
        if (isset($request->permissions)) {
            unset($request['permissions']);
        }

        return new UpdateDataAddressEmployeeResource(
            $this->service->update($request->all())
        );
    }


    /**
     * @param App\Http\Requests\Systems\Erp\UpdateEmployeeBankRequest $request
     * @return array
     */
    public function updateBank(UpdateEmployeeBankRequest $request)
    {
        if (isset($request->permissions)) {
            unset($request['permissions']);
        }

        return new UpdateDataBankEmployeeResource(
            $this->service->update($request->all())
        );
    }

    /**
     * @param string $id
     * @return array
     */
    public function destroy($id)
    {
        return new DestroyGenericResource(
            $this->service->delete($id)
        );
    }
}
