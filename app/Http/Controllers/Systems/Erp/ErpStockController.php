<?php

namespace App\Http\Controllers\systems\erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpStockService;

class ErpStockController extends Controller
{


    /**
     * @var ErpStockService
     */
    protected $service;

    public function __construct(ErpStockService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = null;
        $segmentType = 'Estoque';
        return view('systems.erp.stock', compact('segmentType', 'data'));
    }
}
