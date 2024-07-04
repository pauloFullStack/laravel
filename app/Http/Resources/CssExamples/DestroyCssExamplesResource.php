<?php

namespace App\Http\Resources\CssExamples;

use Illuminate\Http\Resources\Json\JsonResource;

class DestroyCssExamplesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $request['id']
        ];
    }
}
