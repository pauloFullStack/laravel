<?php

namespace App\Http\Controllers\systems\erp;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpFinanceService;


class ErpFinanceController extends Controller
{

    
    /**
     * @var ErpFinanceService
     */
    protected $service;


    public function __construct(ErpFinanceService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = null;
        $segmentType = 'Finanças';
        return view('systems.erp.finance', compact('segmentType', 'data'));
    }
}
