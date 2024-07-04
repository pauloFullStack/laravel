<?php

namespace App\Http\Controllers\Studies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Studies\PhpStudiesService;

class PhpStudiesController extends Controller
{


    /**
     * @var PhpStudiesService
     */
    protected $service;

    public function __construct(PhpStudiesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Estudos Php';
        $route = 'studies.php.search';
        return view('studies.php-studies', compact('segmentType', 'data', 'route'));
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function search(Request $request)
    {

        if (isset($request->all()['search'])) {
            $data = $this->service->search($request->all()['search']);
            $segmentType = 'Estudos Php';
            $route = 'studies.php.search';
            return view('studies.php-studies', compact('segmentType', 'data', 'route'));
        } else {
            $data = null;
            $segmentType = 'Estudos Php';
            $route = 'studies.php.search';
            return view('studies.php-studies', compact('segmentType', 'data', 'route'));
        }
    }
}
