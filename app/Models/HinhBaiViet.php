<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhBaiViet extends Model
{
    use HasFactory;
    
    public function HinhBaiViet(){
        return $this->hasMany(DanhSachHinhBaiViet::class);
    }
}
