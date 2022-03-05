<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachSan extends Model
{
    use HasFactory;
    protected $guard =[];
    protected $fillable = ['tenkhachsan','diachi','mota', 'kinhdo', 'vido','trangthai','hinhanh','danhgia','id_diadiem'];
    public function BaiViet(){
        return $this->hasMany(BaiViet::class);
    }
    public function DiaDiem(){
        return $this->belongsTo(DiaDiem::class);
    }
}
