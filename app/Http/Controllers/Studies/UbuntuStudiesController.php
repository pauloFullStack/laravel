<?php

namespace App\Http\Controllers\Studies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Studies\UbuntuStudiesService;

class UbuntuStudiesController extends Controller
{


    /**
     * @var UbuntuStudiesService
     */
    protected $service;

    public function __construct(UbuntuStudiesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Estudos Ubuntu';
        $route = 'studies.ubuntu.search';
        return view('studies.ubuntu-studies', compact('segmentType', 'data', 'route'));
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function search(Request $request)
    {

        if (isset($request->all()['search'])) {
            $data = $this->service->search($request->all()['search']);
            $segmentType = 'Estudos Ubuntu';
            $route = 'studies.ubuntu.search';
            return view('studies.ubuntu-studies', compact('segmentType', 'data', 'route'));
        } else {
            $data = null;
            $segmentType = 'Estudos Ubuntu';
            $route = 'studies.ubuntu.search';
            return view('studies.ubuntu-studies', compact('segmentType', 'data', 'route'));
        }
    }
}
