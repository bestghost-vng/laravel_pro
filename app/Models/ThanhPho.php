<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanhPho extends Model
{
    use HasFactory;
    protected $guard =[];
    protected $primaryKey = 'id';
    protected $fillable = ['tendiadiem','hinhanh','mota', 'kinhdo', 'vido','trangthai','id_diadiem','khachsan__id','quanan_id','dichvu_id'];
    public function QuanAn(){
        return $this->belongsTo(QuanAn::class,'quanan_id','id');
    }
    public function DichVu(){
        return $this->belongsTo(DichVu::class,'dichvu_id','id');
    }
    public function KhachSan(){
        return $this->belongsTo(KhachSan::class,'khachsan_id','id');
    }
    public function VunnMien(){
        return $this->belongsTo(VungMien::class,'id_vungmien','id');
    }
    public function DiaDiem(){
        return $this->belongsTo(DiaDiem::class,'id_diadiem','id');
    }
}
