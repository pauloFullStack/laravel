<?php

namespace App\Http\Controllers\Api\Systems\Erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpStatusPayment;
use App\Services\Systems\Erp\ErpStatusService;
use App\Services\Systems\Erp\ErpPermissionsService;
use App\Services\Systems\Erp\ErpEmployeeRolesService;
use App\Services\Systems\Erp\ErpServicesService;
use App\Services\UsersService;
use App\Http\Resources\SelectGenericResource;
use App\Http\Resources\DestroyGenericResource;
use App\Http\Resources\Systems\Erp\Services\ServicesResource;
use App\Http\Resources\Systems\Erp\Employees\StoreUpdateEmployeeRolesResource;
use App\Http\Requests\Systems\Erp\RequestSelectGenericService;
use App\Http\Requests\Systems\Erp\Employee\SelectStoreEmployeeRolesRequest;
use App\Http\Requests\Systems\Erp\Employee\SelectUpdateEmployeeRolesRequest;


class SelectController extends Controller
{

    /**
     * @var ErpStatusPayment
     */
    protected $erpStatusPayment;

    /**
     * @var ErpStatusService
     */
    protected $erpStatusService;

    /**
     * @var ErpServicesService
     */
    protected $erpServicesService;

    /**
     * @var ErpEmployeeRolesService
     */
    protected $erpEmployeeRolesService;

    /**
     * @var ErpPermissionsService
     */
    protected $erpPermissionsService;

    /**
     * @var UsersService
     */
    protected $usersService;


    public function __construct(
        ErpStatusPayment $erpStatusPayment,
        ErpStatusService $erpStatusService,
        ErpServicesService $erpServicesService,
        ErpEmployeeRolesService $erpEmployeeRolesService,
        ErpPermissionsService $erpPermissionsService,
        UsersService $usersService
    ) {
        $this->erpStatusPayment = $erpStatusPayment;
        $this->erpStatusService = $erpStatusService;
        $this->erpServicesService = $erpServicesService;
        $this->erpEmployeeRolesService = $erpEmployeeRolesService;
        $this->erpPermissionsService = $erpPermissionsService;
        $this->usersService = $usersService;
    }

    //===================== GET =======================//

    /**
     *
     * @param App\Http\Requests\Systems\Erp\RequestSelectGenericService $request 
     * @return array
     */
    public function searchForAutocompleteService(RequestSelectGenericService $request)
    {
        return ServicesResource::collection(
            $this->erpServicesService->all()
        );
    }


    /**
     *
     * @param App\Http\Requests\Systems\Erp\RequestSelectGenericService $request
     * @return array
     */
    public function searchForAutocompleteStatusPayment(RequestSelectGenericService $request)
    {
        return SelectGenericResource::collection(
            $this->erpStatusPayment->all()
        );
    }



    /**
     *
     * @param App\Http\Requests\Systems\Erp\RequestSelectGenericService $request
     * @return array
     */
    public function searchForAutocompleteStatusService(RequestSelectGenericService $request)
    {
        return SelectGenericResource::collection(
            $this->erpStatusService->all()
        );
    }


    /**
     *
     * @param App\Http\Requests\Systems\Erp\RequestSelectGenericService $request
     * @return array
     */
    public function searchForAutocompleteEmployeeRoles(RequestSelectGenericService $request)
    {
        return SelectGenericResource::collection(
            $this->erpEmployeeRolesService->all()
        );
    }

    /**
     *
     * @param App\Http\Requests\Systems\Erp\RequestSelectGenericService $request
     * @return array
     */
    public function searchForAutocompletePermissions(RequestSelectGenericService $request)
    {
        return SelectGenericResource::collection(
            $this->erpPermissionsService->all()
        );
    }

    /**
     *
     * @param App\Http\Requests\Systems\Erp\RequestSelectGenericService $request
     * @return array
     */
    public function searchForAutocompleteUsers(RequestSelectGenericService $request)
    {
        return SelectGenericResource::collection(
            $this->usersService->all()
        );
    }


    //===================== STORE =======================//

    /**
     *
     * @param App\Http\Requests\Systems\Erp\SelectStoreEmployeeRolesRequest $request
     * @return array
     */
    public function storeEmployeeRoles(SelectStoreEmployeeRolesRequest $request)
    {
        return new StoreUpdateEmployeeRolesResource(
            $this->erpEmployeeRolesService->store($request->all())
        );
        // return response()->json([
        //     'data' => $dataInsert
        // ]);
    }


    //===================== UPDATE =======================//

    /**
     *
     * @param App\Http\Requests\Systems\Erp\SelectUpdateEmployeeRolesRequest $request
     * @return array
     */
    public function updateEmployeeRoles(SelectUpdateEmployeeRolesRequest $request)
    {
        return new StoreUpdateEmployeeRolesResource(
            $this->erpEmployeeRolesService->update($request->all())
        );
    }


    //===================== DESTROY =======================//

    /**
     * @param int $id
     * @return array
     */
    public function destroyEmployeeRoles($id)
    {
        return new DestroyGenericResource(
            $this->erpEmployeeRolesService->delete($id)
        );
    }
}
