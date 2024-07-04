<?php

namespace App\Http\Controllers\Studies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Studies\NodeStudiesService;

class NodeStudiesController extends Controller
{


    /**
     * @var NodeStudiesService
     */
    protected $service;

    public function __construct(NodeStudiesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Estudos Node';
        $route = 'studies.node.search';
        return view('studies.node-studies', compact('segmentType', 'data', 'route'));
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function search(Request $request)
    {

        if (isset($request->all()['search'])) {
            $data = $this->service->search($request->all()['search']);
            $segmentType = 'Estudos Node';
            $route = 'studies.node.search';
            return view('studies.node-studies', compact('segmentType', 'data', 'route'));
        } else {
            $data = null;
            $segmentType = 'Estudos Node';
            $route = 'studies.node.search';
            return view('studies.node-studies', compact('segmentType', 'data', 'route'));
        }
    }
}
