<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaDiem extends Model
{
    use HasFactory;
    protected $guard =[];
    protected $primaryKey ='id'; 
    protected $fillable = ['tendiadiem','mieuta','trangthai','kinhdo','vido','hinhanh','quanan_id','khachsan_id','dichvu_id'];
    public function BaiViet(){
        return $this->belongsTo(BaiViet::class);
    }
    public function QuanAn(){
        return $this->belongsTo(QuanAn::class,'quanan_id','id');
    }
    public function DichVu(){
        return $this->belongsTo(DichVu::class,'dichvu_id','id');
    }
    public function KhachSan(){
        return $this->belongsTo(KhachSan::class,'khachsan_id','id');
    }
    public function ThanhPho(){
        return $this->belongsTo(ThanhPho::class);
    }
}
 