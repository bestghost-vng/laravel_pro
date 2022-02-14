<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhBaiViet extends Model
{
    use HasFactory;
    protected $fillable = ['nguon','id_hinh_anh',"trangthai"];
    public function HinhBaiViet(){
        return $this->hasMany(BaiViet::class,'id_hinh_anh','id');
    }
}
