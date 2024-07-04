<?php

namespace App\Http\Resources\CssExamples;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreUpdateCssExamplesResource extends JsonResource
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
                'parameters' => [
                    'code_image' => $this->resource['code_image'],
                ],
                'original' => [
                    'id' => $this->resource['id'],
                    'title' => $this->resource['title'],
                    'position' => $this->resource['position'],
                    'image' => $this->resource['image'],
                    'code_image' => $this->resource['code_image'],
                ]
            ];
        } else {
            return [
                'parameters' => [
                    'code_image' => $this->resource->code_image,
                ],
                'original' => [
                    'id' => $this->resource->id,
                    'title' => $this->resource->title,
                    'position' => $this->resource->position,
                    'image' => $this->resource->image,
                ]
            ];
        }
    }
}
