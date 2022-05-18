<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DistributerResurs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID - ' => $this->resource->id,
            'NAZIV - ' => $this->resource->naziv,
            'ADRESA - ' => $this->resource->adresa,
            'GRAD - ' => $this->resource->grad,
        ];
    }
}
