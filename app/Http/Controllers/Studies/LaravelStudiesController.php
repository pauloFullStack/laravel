<?php

namespace App\Http\Controllers\Studies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Studies\LaravelStudiesService;

class LaravelStudiesController extends Controller
{


    /**
     * @var LaravelStudiesService
     */
    protected $service;

    public function __construct(LaravelStudiesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Estudos Laravel';
        $route = 'studies.laravel.search';
        return view('studies.laravel-studies', compact('segmentType', 'data', 'route'));
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function search(Request $request)
    {

        if (isset($request->search)) {
            $data = $this->service->search($request->search);
            $segmentType = 'Estudos Laravel';
            $route = 'studies.laravel.search';
            return view('studies.laravel-studies', compact('segmentType', 'data', 'route'));
        } else {
            $data = null;
            $segmentType = 'Estudos Laravel';
            $route = 'studies.laravel.search';
            return view('studies.laravel-studies', compact('segmentType', 'data', 'route'));
        }
    }
}
