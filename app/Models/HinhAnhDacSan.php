<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhAnhDacSan extends Model
{
    use HasFactory;
    public function HinhDacSan(){
        return $this->hasMany(DanhSachHinhDacSan::class);
    }
}
