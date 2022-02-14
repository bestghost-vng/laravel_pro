<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanhPho extends Model
{
    use HasFactory;
    protected $guard =[];
    protected $primaryKey = 'id';
    protected $fillable = ['tenthanhpho','hinhanh','mota','trangthai','id_vungmien','id_diadiem'];

    public function VunnMien(){
        return $this->belongsTo(VungMien::class,'id_vungmien','id');
    }
    public function DiaDiem(){
        return $this->belongsTo(DiaDiem::class,'id_diadiem','id');
    }
}
