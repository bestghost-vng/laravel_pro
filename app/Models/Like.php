<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
       'id_baiviet','id_nguoidung','luotlike'
    ];
    public function BaiViet(){
        return $this->hasMany(BaiViet::class,'id_baiviet','id');
    }
    public function User(){
        return $this->belongsTo(User::class,'id_nguoidung','id');
    }
}
