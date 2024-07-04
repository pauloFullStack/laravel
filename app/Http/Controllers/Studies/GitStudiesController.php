<?php

namespace App\Http\Controllers\Studies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Studies\GitStudiesService;

class GitStudiesController extends Controller
{


    /**
     * @var GitStudiesService
     */
    protected $service;

    public function __construct(GitStudiesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Estudos Git';
        $route = 'studies.git.search';
        return view('studies.git-studies', compact('segmentType', 'data', 'route'));
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function search(Request $request)
    {

        if (isset($request->all()['search'])) {
            $data = $this->service->search($request->all()['search']);
            $segmentType = 'Estudos Git';
            $route = 'studies.git.search';
            return view('studies.git-studies', compact('segmentType', 'data', 'route'));
        } else {
            $data = null;
            $segmentType = 'Estudos Git';
            $route = 'studies.git.search';
            return view('studies.git-studies', compact('segmentType', 'data', 'route'));
        }
    }
}
