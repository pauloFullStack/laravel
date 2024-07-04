<?php

namespace App\Http\Controllers\CssExamples;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CssExamples\CssExamplesService;

class CssExamplesController extends Controller
{

    protected $service;

    public function __construct(CssExamplesService $service)
    {
        $this->service = $service;
    }

    /**
     * @return array
    */
    public function index()
    {
        $name = 'Exemplos CSS';
        $route = 'css-examples.search';
        $data = $this->service->all();
        return view('css-examples.list', [
            'name' => $name,
            'data' => $data,
            'route' => $route,
        ]);
    }

    /**
     * @return array
    */
    public function edit()
    {
        $name = 'Exemplos CSS - Editar';
        $data = $this->service->all();
        $typeOfRequest = 'example_css';
        $th = [
            'examples_css' => [
                'title' => 'Título',
                'position' => 'Posição',
                'editar' => 'Editar',
                'deletar' => 'Deletar',
                'capa' => 'Capa',
            ]
        ];
        $collapse = '5';
        return view('css-examples.edit', [
            'name' => $name,
            'data' => $data,
            'collapse' => $collapse,
            'th' => $th,
            'typeOfRequest' => $typeOfRequest,
        ]);
    }

    /**
     * @param string $id
     * @return array
    */
    public function show($id)
    {

        $code = $this->service->repository()->find($id)->code_image;
        return view('css-examples.show', [
            'code' => $code,
        ]);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @return array
    */
    public function search(Request $request)
    {
        if (isset($request->search)) {

            $data = $this->service->search($request->search);
            $allData = 'css-examples.list';
            $route = 'css-examples.search';

            return view('css-examples.list', [
                'allData' => $allData,
                'data' => $data,
                'route' => $route,
                'exampleCss' => 'Exemplos CSS'
            ]);
        }

        return $this->index();
    }
}
