<?php

namespace App\Http\Controllers\systems\erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpCustomersServicesService;

class ErpScheduleController extends Controller
{

    
    /**
     * @var ErpCustomersServicesService
     */
    protected $service;


    public function __construct(ErpCustomersServicesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Todos Trabalhos';
        $typeOfRequest = 'customer_service';
        if (isset($data->name)) {
            $name = $data->name;
            unset($data->name);
        } else {
            $name = null;
        }

        $th = [
            'service_customer' => [
                'servico' => 'Serviço',
                'status_service' => 'Status/Serviço',
                'value_service' => 'Valor/Serviço',
                'status_pag' => 'Status/Pag',
                'responsible' => 'Responsável',
                'editor_service' => 'Editar Serviço',
                'delete_service' => 'Deletar Serviço',
            ]
        ];
        $collapse = '7';
        return view('systems.erp.schedule', [
            'segmentType' => $segmentType,
            'data' => $data,
            'name' => $name,
            'th' => $th,
            'collapse' => $collapse,
            'typeOfRequest' => $typeOfRequest,
        ]);
    }
}
