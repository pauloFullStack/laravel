<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Systems\Erp\ErpStatusPayment;
use App\Http\Resources\TesteResource;

class TesteController extends Controller
{

    protected $erpStatusPayment;

    public function __construct(ErpStatusPayment $erpStatusPayment)
    {
        $this->erpStatusPayment = $erpStatusPayment;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchForAutocomplete()
    {
        return TesteResource::collection(
            $this->erpStatusPayment->all()
        );
    }
}
