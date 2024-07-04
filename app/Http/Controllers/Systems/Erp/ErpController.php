<?php

namespace App\Http\Controllers\systems\erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpServicesService;
use App\Services\Systems\Erp\ErpEmployeesService;

class ErpController extends Controller
{

    
    /**
     * @var ErpServicesService
     */
    protected $service;

    /**
     * @var ErpEmployeesService
     */
    protected $erpEmployeesService;


    public function __construct(
        ErpServicesService $service,
        ErpEmployeesService $erpEmployeesService
    ) {
        $this->service = $service;
        $this->erpEmployeesService = $erpEmployeesService;
    }


    /**
     * @return array
     */
    public function index()
    {
        $userRoles = $this->erpEmployeesService->getEmployeeRoles();
        $data = $this->service->all();
        $segmentType = 'Sistema ERP';
        return view('systems.erp.dashboard', [
            'data' => $data,
            'userRoles' => $userRoles,
            'segmentType' => $segmentType
        ]);
    }
}
