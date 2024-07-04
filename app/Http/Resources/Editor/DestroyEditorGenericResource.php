<?php

namespace App\Http\Resources\Editor;

use Illuminate\Http\Resources\Json\JsonResource;

class DestroyEditorGenericResource extends JsonResource
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
