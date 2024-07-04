<?php

namespace App\Http\Controllers\Studies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Studies\AwsStudiesService;

class AwsStudiesController extends Controller
{


    /**
     * @var AwsStudiesService
     */
    protected $service;

    public function __construct(AwsStudiesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Estudos Aws';
        $route = 'studies.aws.search';
        return view('studies.aws-studies', compact('segmentType', 'data', 'route'));
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function search(Request $request)
    {

        if (isset($request->all()['search'])) {
            $data = $this->service->search($request->all()['search']);
            $segmentType = 'Estudos Aws';
            $route = 'studies.aws.search';
            return view('studies.aws-studies', compact('segmentType', 'data', 'route'));
        } else {
            $data = null;
            $segmentType = 'Estudos Aws';
            $route = 'studies.aws.search';
            return view('studies.aws-studies', compact('segmentType', 'data', 'route'));
        }
    }
}
