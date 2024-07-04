<?php

namespace App\Http\Controllers\Studies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Studies\SshStudiesService;

class SshStudiesController extends Controller
{


    /**
     * @var SshStudiesService
     */
    protected $service;

    public function __construct(SshStudiesService $service)
    {
        $this->service = $service;
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Estudos Ssh';
        $route = 'studies.ssh.search';
        return view('studies.ssh-studies', compact('segmentType', 'data', 'route'));
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function search(Request $request)
    {

        if (isset($request->all()['search'])) {
            $data = $this->service->search($request->all()['search']);
            $segmentType = 'Estudos Ssh';
            $route = 'studies.ssh.search';
            return view('studies.ssh-studies', compact('segmentType', 'data', 'route'));
        } else {
            $data = null;
            $segmentType = 'Estudos Ssh';
            $route = 'studies.ssh.search';
            return view('studies.ssh-studies', compact('segmentType', 'data', 'route'));
        }
    }
}
