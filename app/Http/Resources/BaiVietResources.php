<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources;
class BaiVietResources extends JsonResource
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
            'ngaydang'=>$this ->ngay_dang,
            'noidung'=>$this->noi_dung,
            'tenquanan'=>QuanAnResources::collection($this->tenquanan),
            'tendacsan'=>DacSanResources::collection($this->tendacsan),
            'tendiadiem'=>DiaDiemResources::collection($this->tendiadiem),
            'tendichvu'=>DichVuResources::collection($this->tendichvu),
            'tennguoidang'=>UserResources::collection($this->name)

        ];
    }
}
