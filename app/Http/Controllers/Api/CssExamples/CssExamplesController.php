<?php

namespace App\Http\Controllers\Api\CssExamples;

use App\Http\Controllers\Controller;
use App\Services\CssExamples\CssExamplesService;
use App\Http\Resources\CssExamples\StoreUpdateCssExamplesResource;
use App\Http\Resources\CssExamples\DestroyCssExamplesResource;
use App\Http\Requests\CssExamples\StoreCssExamplesRequest;
use App\Http\Requests\CssExamples\UpdateCssExamplesRequest;

class CssExamplesController extends Controller
{

    /**
     * @var ErpServicesService
     */
    protected $service;


    public function __construct(
        CssExamplesService $service
    ) {
        $this->service = $service;
    }

    /**
     * @param App\Http\Requests\CssExamples\StoreCssExamplesRequest $request
     * @return array
     */
    public function store(StoreCssExamplesRequest $request)
    {
        return new StoreUpdateCssExamplesResource(
            $this->service->store($request)
        );
    }

    /**
     * @param App\Http\Requests\CssExamples\UpdateCssExamplesRequest $request
     * @return array
     */
    public function update(UpdateCssExamplesRequest $request)
    {
        return new StoreUpdateCssExamplesResource(
            $this->service->update($request)
        );
    }

    /**
     * @param string $id
     * @return array
     */
    public function destroy($id)
    {
        return new DestroyCssExamplesResource(
            $this->service->delete($id)
        );
    }
}
