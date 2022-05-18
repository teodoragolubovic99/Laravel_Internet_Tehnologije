<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProizvodResurs extends JsonResource
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
            'SIFRA - ' => $this->resource->sifra,
            'VELICINA - ' => $this->resource->velicina,
            'CENA - ' => $this->resource->cena,
            'BREND - ' => new BrendResurs($this->resource->brend),

        ];
    }
}
