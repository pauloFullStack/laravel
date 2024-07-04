<?php

namespace App\Http\Controllers\systems\erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpProvidersService;
use App\Services\Systems\Erp\ErpCustomersServicesService;


class ErpProvidersController extends Controller
{

    
    /**
     * @var ErpProvidersService
     */
    protected $service;

    /**
     * @var ErpCustomersServicesService
     */
    protected $erpCustomersServicesService;


    public function __construct(
        ErpProvidersService $service,
        ErpCustomersServicesService $erpCustomersServicesService
    ) {
        $this->service = $service;
        $this->erpCustomersServicesService = $erpCustomersServicesService;
    }


    /**
     * @return array
     */
    public function index()
    {

        $data = $this->erpCustomersServicesService->getWorksEmployee();
        $typeOfRequest = 'my_works';
        $th = [
            'my_works' => [
                'service' => 'Serviço',
                'status_service' => 'Status Serviço',
                'data_entrega' => 'Data Entrega',
                'start' => 'Iniciado',
                'pause' => 'Parado',
                'concluded' => 'Concluido',
            ]
        ];
        $collapse = '6';
        $segmentType = 'Meus Trabalhos';
        return view('systems.erp.providers', [
            'data' => $data,
            'segmentType' => $segmentType,
            'collapse' => $collapse,
            'typeOfRequest' => $typeOfRequest,
            'th' => $th
        ]);
    }
}
