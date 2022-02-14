<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_baiviet','id_nguoidung','view'
 
     ];
     public function BaiViet(){
        return $this->hasMany(BaiViet::class,'id_baiviet','id');
    }
    public function User(){
        return $this->belongsTo(User::class,'id_nguoidung','id');
    }
}
