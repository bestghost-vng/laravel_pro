<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhSachHinhBaiViet extends Model
{
    use HasFactory;
    public function BaiViet(){
        return $this->belongsTo(BaiViet::class);
    }
    public function HinhBaiViet(){
        return $this->hasMany(BaiViet::class);
    }
}
