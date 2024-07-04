<?php

namespace App\Http\Controllers\systems\erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpEmployeesService;
use App\Services\Systems\Erp\ErpEmployeeRolesService;
use Auth;

class ErpEmployeesController extends Controller
{

    
    /**
     * @var ErpEmployeesService
     */
    protected $service;

    /**
     * @var ErpEmployeeRolesService
     */
    protected $erpEmployeeRolesService;


    public function __construct(
        ErpEmployeesService $service,
        ErpEmployeeRolesService $erpEmployeeRolesService
    ) {
        $this->service = $service;
        $this->erpEmployeeRolesService = $erpEmployeeRolesService;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $dataEmployeeRoles = $this->erpEmployeeRolesService->all();
        $segmentType = 'Colaboradores';
        $collapse = '7';
        return view('systems.erp.employees', [
            'data' => $data,
            'segmentType' => $segmentType,
            'collapse' => $collapse,
            'dataEmployeeRoles' => $dataEmployeeRoles,
        ]);
    }
}
