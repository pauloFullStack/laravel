<?php

namespace App\Http\Controllers\Api\SitePhpGold;

use App\Http\Controllers\Controller;
use App\Services\SitePhpGold\SitePhpGoldService;
use Illuminate\Http\Request;
use App\Http\Resources\Messages\MessagesResource;

class SitePhpGoldController extends Controller
{
    /**
     * @var SitePhpGoldService
     */
    protected $service;


    public function __construct(
        SitePhpGoldService $service
    ) {
        $this->service = $service;
    }

    /**
     * @param App\Http\Requests\Editor\StoreEditorGenericRequest $request
     * @return array
     */
    public function sendEmail(Request $request)
    {
        return new MessagesResource(
            $this->service->handleEmailData($request->all())
        );
    }
}
