<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaDiem extends Model
{
    use HasFactory;
    protected $guard =[];
    protected $primaryKey ='id'; 
    protected $fillable = ['tenthanhpho','kinhdo','vido','hinhanh','id_vungmien','trangthai'];
    public function BaiViet(){
        return $this->belongsTo(BaiViet::class);
    }
    public function ThanhPho(){
        return $this->hasMany(ThanhPho::class);
    }
}
 