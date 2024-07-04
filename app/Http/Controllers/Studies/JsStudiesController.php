<?php

namespace App\Http\Controllers\Studies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Studies\JsStudiesService;

class JsStudiesController extends Controller
{


    /**
     * @var JsStudiesService
     */
    protected $service;

    public function __construct(JsStudiesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Estudos Javascript';
        $route = 'studies.js.search';
        return view('studies.js-studies', compact('segmentType', 'data', 'route'));
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function search(Request $request)
    {

        if (isset($request->all()['search'])) {
            $data = $this->service->search($request->all()['search']);
            $segmentType = 'Estudos Javascript';
            $route = 'studies.js.search';
            return view('studies.js-studies', compact('segmentType', 'data', 'route'));
        } else {
            $data = null;
            $segmentType = 'Estudos Javascript';
            $route = 'studies.js.search';
            return view('studies.js-studies', compact('segmentType', 'data', 'route'));
        }
    }
}
