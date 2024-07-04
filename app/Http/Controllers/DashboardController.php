<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\TesteService;

class DashboardController extends Controller
{

    /**
     * @var TesteService
    */
    protected $testeService;


    public function __construct(TesteService $testeService)
    {
        $this->testeService = $testeService;
    }


    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }
}
