<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Editor\CssEditorService;

class CssEditorController extends Controller
{


    /**
     * @var CssEditorService
     */
    protected $service;

    public function __construct(CssEditorService $service)
    {
        $this->service = $service;
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function store(Request $request)
    {
        $data = $this->service->store($request->all());
        if (isset($data)) {
            return response()->json([
                'data' => $data
            ]);
        }
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = $this->service->all();
        $segmentType = 'Css Editor';
        $typeOfRequest = 'editor';
        $th = [
            'editor_studies' => [
                'title' => 'Título',
                'code' => 'Código',
                'position' => 'Posição Post',
                'description' => 'Descrição Post',
                'editar' => 'Editar',
                'deletar' => 'Deletar',
            ]
        ];
        $collapse = '6';
        return view('editor.css-editor', [
            'data' => $data,
            'segmentType' => $segmentType,
            'th' => $th,
            'collapse' => $collapse,
            'typeOfRequest' => $typeOfRequest,
        ]);
    }


    /**
     * @return array
     */
    public function indexAjax()
    {
        $data = $this->service->all();
        return response()->json($data);
    }


    /**
     * @param string $id
     * @return array
     */
    public function destroy($id)
    {
        $editorDestroy = $this->service->delete($id);

        if ($editorDestroy == true) {
            return response()->json([
                'status' => $id
            ]);
        }
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function update(Request $data)
    {
        $editorUpdate = $this->service->update($data);
        if ($editorUpdate == true) {
            return response()->json([
                'status' => $data->all()
            ]);
        }
    }
}
