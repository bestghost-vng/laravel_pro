<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanAn extends Model
{
    use HasFactory;
    protected $guard =[];
    protected $primaryKey = 'id';
    protected $fillable = ['tenquanan','diachi','hinhanh'];
    public function BaiViet(){
        return $this->hasMany(BaiViet::class,'id_quanan','id');
    }
    public function DiaDiem()
    {
        return $this->belongsTo(DiaDiem::class);
    }
    public function DacSan(){
        return $this->belongsTo(DacSan::class);
    }
}
