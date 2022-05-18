<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrendResurs extends JsonResource
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
            'OSNIVAC - ' => $this->resource->osnivac,
            'DISTRIBUTER - ' => new DistributerResurs($this->resource->distributer)
        ];
    }
}
