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
            // 'hinhanh'=>DanhSachHinhBaiViet::collection(HinhBaiViet::collection($this->nguon)),
            'tenquanan'=>QuanAnResources::collection($request->tenquanan),
            // 'tendacsan'=>DacSan::collection($this->tendacsan),
            // 'tendiadiem'=>DiaDiem::collection($this->tendiadiem),
            // 'tendichvu'=>DichVu::collection($this->tendichvu),
            // 'tennguoidang'=>User::collection($this->name)

        ];
    }
}
