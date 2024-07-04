<?php

namespace App\Http\Controllers\Studies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Studies\DockerStudiesService;

class DockerStudiesController extends Controller
{


    /**
     * @var DockerStudiesService
     */
    protected $service;

    public function __construct(DockerStudiesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Estudos Docker';
        $route = 'studies.docker.search';
        return view('studies.docker-studies', compact('segmentType', 'data', 'route'));
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function search(Request $request)
    {

        if (isset($request->all()['search'])) {
            $data = $this->service->search($request->all()['search']);
            $segmentType = 'Estudos Docker';
            $route = 'studies.docker.search';
            return view('studies.docker-studies', compact('segmentType', 'data', 'route'));
        } else {
            $data = null;
            $segmentType = 'Estudos Docker';
            $route = 'studies.docker.search';
            return view('studies.docker-studies', compact('segmentType', 'data', 'route'));
        }
    }
}
