<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhSachHinhDacSan extends Model
{
    use HasFactory;
    public function Dacsan(){
        return $this->hasMany(DacSan::class);
    }
    public function HinhDacSan(){
        return $this->hasMany(HinhDacSan::class);
    }
}
