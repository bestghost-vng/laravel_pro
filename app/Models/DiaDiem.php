<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaDiem extends Model
{
    use HasFactory;
    protected $guard =[];
    protected $primaryKey ='id'; 
    protected $fillable = ['tendiadiem','mieuta','trangthai','kinhdo','vido','quanan_id','khachsan_id','dichvu_id'];
    public function BaiViet(){
        return $this->hasMany(BaiViet::class);
    }
    public function QuanAn(){
        return $this->hasMany(QuanAn::class);
    }
    public function DichVu(){
        return $this->hasMany(DichVu::class);
    }
    public function KhachSan(){
        return $this->hasMany(KhachSan::class);
    }
}
 