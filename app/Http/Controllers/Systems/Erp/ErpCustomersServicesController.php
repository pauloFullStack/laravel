<?php

namespace App\Http\Controllers\systems\erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpCustomersServicesService;

class ErpCustomersServicesController extends Controller
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
        $segmentType = 'Clientes';
        return view('systems.erp.customers', compact('segmentType'));
    }
}
