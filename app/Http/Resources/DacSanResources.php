<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DacSanResources extends JsonResource
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
            'id'=> $this->id,
            'tendacsan'=>$this ->tendacsan,
            'hinhanh'=>$this->hinhanh,
            'mota'=>$this->mota,
            'gia'=>$this->gia,
        ];
    }
}
