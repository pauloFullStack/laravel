<?php

namespace App\Http\Resources\Editor;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreUpdateEditorGenericResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (isset($this->resource['id'])) {
            return [
                'id' => $this->resource['id'],
                'title' => $this->resource['title'],
                'code' => $this->resource['code'],
                'position' => $this->resource['position'],
                'description' => $this->resource['description'],
            ];
        } else {
            return [
                'id' => $this->resource->id,
                'title' => $this->resource->title,
                'code' => $this->resource->code,
                'position' => $this->resource->position,
                'description' => $this->resource->description,
            ];
        }
    }
}
