<?php

namespace App\Http\Controllers\systems;

use App\Http\Controllers\Controller;
use App\Services\TesteService;

class SystemsController extends Controller
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
     * @return array
     */
    public function index()
    {
        $data = [
            'segmentType' => 'Sistemas'
        ];
        return view('home-systems', compact('data'));
    }
}
