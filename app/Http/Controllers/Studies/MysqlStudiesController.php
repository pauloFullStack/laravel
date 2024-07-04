<?php

namespace App\Http\Controllers\Studies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Studies\MysqlStudiesService;

class MysqlStudiesController extends Controller
{


    /**
     * @var MysqlStudiesService
     */
    protected $service;

    public function __construct(MysqlStudiesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Estudos Mysql';
        $route = 'studies.mysql.search';
        return view('studies.mysql-studies', compact('segmentType', 'data', 'route'));
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function search(Request $request)
    {

        if (isset($request->all()['search'])) {
            $data = $this->service->search($request->all()['search']);
            $segmentType = 'Estudos Mysql';
            $route = 'studies.mysql.search';
            return view('studies.mysql-studies', compact('segmentType', 'data', 'route'));
        } else {
            $data = null;
            $segmentType = 'Estudos Mysql';
            $route = 'studies.mysql.search';
            return view('studies.mysql-studies', compact('segmentType', 'data', 'route'));
        }
    }
}
