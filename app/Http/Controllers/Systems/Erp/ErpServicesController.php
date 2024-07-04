<?php

namespace App\Http\Controllers\Systems\Erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpServicesService;

class ErpServicesController extends Controller
{


    /**
     * @var ErpServicesService
     */
    protected $service;


    public function __construct(ErpServicesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Serviços';
        $typeOfRequest = 'service';
        $th = [
            'service' => [
                'nome' => 'Nome',
                'valor' => 'Valor',
                'observacao' => 'Observação',
                'editar' => 'Editar',
                'deletar' => 'Deletar'
            ]
        ];
        $collapse = '5';
        return view('systems.erp.services', compact('segmentType', 'data', 'th', 'collapse', 'typeOfRequest'));
    }
}
