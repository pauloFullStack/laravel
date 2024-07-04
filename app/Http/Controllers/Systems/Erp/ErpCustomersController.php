<?php

namespace App\Http\Controllers\systems\erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpCustomersService;
use App\Services\Systems\Erp\ErpCustomersServicesService;

class ErpCustomersController extends Controller
{

    
    /** 
     * @var ErpCustomersService 
     */
    protected $service;

    /** 
     * @var ErpCustomersServicesService 
     */
    protected $erpCustomersServicesService;


    public function __construct(
        ErpCustomersService $service,
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
        $segmentType = 'Todos Clientes';
        $data = $this->service->all();
        $typeOfRequest = 'customer';
        $th = [
            'customer' => [
                'nome' => 'Nome',
                'telefone' => 'Telefone',
                'email' => 'Email',
                'service_pagamentos' => 'Serviços/Pagamentos',
                'editar' => 'Editar',
                'deletar' => 'Deletar',
            ]
        ];
        $collapse = '6';
        return view('systems.erp.customers', compact('segmentType', 'data', 'collapse', 'th', 'typeOfRequest'));
    }


    /**
     * @param string $id
     * @return array
     */
    public function customer($id)
    {
        $data = $this->service->customer($id);
        $customers = 'Todos Clientes';
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
        return view('systems.erp.customer-data', [
            'customers' => $customers,
            'data' => $data,
            'name' => $name,
            'id' => $id,
            'th' => $th,
            'collapse' => $collapse,
            'typeOfRequest' => $typeOfRequest,
        ]);
    }
}
