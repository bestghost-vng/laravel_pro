<?php

namespace App\Http\Resources;

use App\Models\DichVu;
use App\Models\QuanAn;
use Illuminate\Http\Resources\Json\JsonResource;

use function GuzzleHttp\Promise\all;

class DiaDiemResources extends JsonResource
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
            'tendiadiem'=>$this->tendiadiem,
            'kinhdo'=>$this->kinhdo,
            'vido'=>$this->vido,
            'mieuta'=>$this->mieuta,
            // 'quanan'=>QuanAnResources::collection($this->tenquanan),
            // 'tenkhachsan'=>KhachSanResources::collection($this->tenkhachsan),
            // 'tendichvu'=>DichVuResources::collection($this->tendichvu),
        ];
    }
}
