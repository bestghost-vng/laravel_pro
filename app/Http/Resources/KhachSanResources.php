<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KhachSanResources extends JsonResource
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
            'id'=>$this->id,
            'tenkhachsan'=>$this->tenkhachsan,
            'hinhanh'=>$this->hinhanh,
            'diachi'=>$this->diachi,
            'danhgia'=>$this->danhgia
          ];
    }
}
