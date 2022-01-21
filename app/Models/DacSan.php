<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DacSan extends Model
{
    use HasFactory; 
    protected $guard =[];
    public function DanhSachHinh(){
        return $this->belongsTo(DanhSachHinhDacSan::class);
   }
    public function BaiViet(){
        return $this->hasMany(BaiViet::class);
    }
}
