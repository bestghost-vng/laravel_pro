<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'ngaydang',
        'tenquanan',
        'tendiadiem',
        'tendacsan',
        'tennguoidang',
        'tenkhachsan'
        
    ];
    protected $guard =[];
    public function DichVu(){
        return $this->belongsTo(DichVu::class,'id_dichvu','id');
    }
    public function QuanAn(){
        return $this->belongsTo(QuanAn::class,'id_quanan','id');
    }
    public function KhachSan()
    {
        return $this->belongsTo(KhachSan::class,'id_khachsan','id');
    }
    public function DiaDiem(){
        return $this->belongsTo(DiaDiem::class,'id_diadiem','id');
    }
    public function DacSan(){
        return $this->belongsTo(DacSan::class,'id_dacsan','id');
    }
    public function User(){
        return $this->belongsTo(User::class,'id_nguoidung','id');
    }
    public function HinhBaiViet(){
        return $this->hasMany(HinhBaiViet::class);
    }
}
   
