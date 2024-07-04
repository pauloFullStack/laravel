<?php

namespace App\Http\Controllers\Studies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TesteService;

class StudiesController extends Controller
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
            'segmentType' => 'Estudos'
        ];
        return view('home-studies', compact('data'));
    }
}
