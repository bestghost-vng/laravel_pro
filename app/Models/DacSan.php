<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DacSan extends Model
{
    use HasFactory; 
    protected $guard =[];
    protected $fillable = ['tendacsan','hinhanh','mota','gia','quanan_id','trangthai'];
    public function QuanAn(){
        return $this->hasMany(QuanAn::class);
   }
    public function BaiViet(){
        return $this->hasMany(BaiViet::class);
    }
    public function DiaDiem(){
        return $this->belongsTo(DiaDiem::class);
    }
}
