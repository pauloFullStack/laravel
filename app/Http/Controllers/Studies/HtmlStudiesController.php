<?php

namespace App\Http\Controllers\Studies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Studies\HtmlStudiesService;

class HtmlStudiesController extends Controller
{


    /**
     * @var HtmlStudiesService
     */
    protected $service;

    public function __construct(HtmlStudiesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Estudos Html';
        $route = 'studies.html.search';
        return view('studies.html-studies', compact('segmentType', 'data', 'route'));
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function search(Request $request)
    {

        if (isset($request->all()['search'])) {
            $data = $this->service->search($request->all()['search']);
            $segmentType = 'Estudos Html';
            $route = 'studies.html.search';
            return view('studies.html-studies', compact('segmentType', 'data', 'route'));
        } else {
            $data = null;
            $segmentType = 'Estudos Html';
            $route = 'studies.html.search';
            return view('studies.html-studies', compact('segmentType', 'data', 'route'));
        }
    }
}
