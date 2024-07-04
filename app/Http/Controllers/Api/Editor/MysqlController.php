<?php

namespace App\Http\Controllers\Api\Editor;

use App\Http\Controllers\Controller;
use App\Services\Editor\MysqlEditorService;
use App\Http\Resources\Editor\StoreUpdateEditorGenericResource;
use App\Http\Resources\Editor\DestroyEditorGenericResource;
use App\Http\Requests\Editor\StoreEditorGenericRequest;
use App\Http\Requests\Editor\UpdateEditorGenericRequest;

class MysqlController extends Controller
{

    /**
     * @var MysqlEditorService
     */
    protected $service;


    public function __construct(
        MysqlEditorService $service
    ) {
        $this->service = $service;
    }

    /**
     * @param App\Http\Requests\Editor\StoreEditorGenericRequest $request
     * @return array
     */
    public function store(StoreEditorGenericRequest $request)
    {
        return new StoreUpdateEditorGenericResource(
            $this->service->store($request->all())
        );
    }

    /**
     * @param App\Http\Requests\Editor\UpdateEditorGenericRequest $request
     * @return array
     */
    public function update(UpdateEditorGenericRequest $request)
    {
        return new StoreUpdateEditorGenericResource(
            $this->service->update($request->all())
        );
    }

    /**
     * @param string $id
     * @return array
     */
    public function destroy($id)
    {
        return new DestroyEditorGenericResource(
            $this->service->delete($id)
        );
    }
}
