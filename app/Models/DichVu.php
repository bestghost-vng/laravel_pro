<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    use HasFactory;
    protected $guard =[];
    protected $fillable = ['tendichvu','mota','trangthai','hinhanh'];
    public function BaiViet(){
        return $this->hasMany(BaiViet::class);
    }
    public function DiaDiem(){
        return $this->hasMany(DiaDiem::class);
    }
}
