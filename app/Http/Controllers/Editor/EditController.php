<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TesteService;

class EditController extends Controller
{


    /**
     * @var TesteService
     */
    protected $testeService;

    public function __construct(TesteService $testeService)
    {
        $this->testeService = $testeService;
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function store(Request $request)
    {
        $dataInsert = $this->testeService->store($request->all());
        if (isset($dataInsert)) {
            return response()->json([
                'data' => $dataInsert
            ]);
        }
    }


    /**
     * @return array
     */
    public function index()
    {
        $data = [
            'segmentType' => 'Editor'
        ];
        return view('editor', compact('data'));
    }


    /**
     * @param string $id
     * @return array
     */
    public function destroy($id)
    {
        $teste = $this->testeService->delete($id);

        if ($teste == true) {
            return response()->json([
                'status' => 'deleteSuccess'
            ]);
        }
    }


    /**
     * @param Illuminate\Http\Request
     * @return array
     */
    public function update(Request $data)
    {
        $teste = $this->testeService->update($data);
        if ($teste == true) {
            return response()->json([
                'status' => $data->all()
            ]);
        }
    }
}
