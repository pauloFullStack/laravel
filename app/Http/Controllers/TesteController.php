<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TesteService;

class TesteController extends Controller
{

    protected $testeService;

    public function __construct(TesteService $testeService)
    {
        $this->testeService = $testeService;
    }

    public function store(Request $request)
    {
        $dataInsert = $this->testeService->store($request->all());
        if (isset($dataInsert)) {
            return response()->json([
                'data' => $dataInsert
            ]);
        }
    }

    public function index()
    {
        $data = $this->testeService->all();
        return view('dashboard', compact('data'));
    }

    public function destroy($id)
    {
        $teste = $this->testeService->delete($id);

        if ($teste == true) {
            return response()->json([
                'status' => 'deleteSuccess'
            ]);
        }
    }

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
