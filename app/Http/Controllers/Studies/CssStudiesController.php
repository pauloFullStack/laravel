<?php

namespace App\Http\Controllers\Studies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Studies\CssStudiesService;

class CssStudiesController extends Controller
{


    /**
     * @var CssStudiesService
     */
    protected $service;

    public function __construct(CssStudiesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Estudos Css';
        $route = 'studies.css.search';
        return view('studies.css-studies', compact('segmentType', 'data', 'route'));
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function search(Request $request)
    {

        if (isset($request->all()['search'])) {
            $data = $this->service->search($request->all()['search']);
            $segmentType = 'Estudos Css';
            $route = 'studies.css.search';
            return view('studies.css-studies', compact('segmentType', 'data', 'route'));
        } else {
            $data = null;
            $segmentType = 'Estudos Css';
            $route = 'studies.css.search';
            return view('studies.css-studies', compact('segmentType', 'data', 'route'));
        }
    }
}
