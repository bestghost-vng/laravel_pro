<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'noidung',
        'trangthai',
        'like',
        'dislike',
        'view',
        'id_diadiem',
        'id_nguoidung',

    ];
    protected $guard =[];

    public function DiaDiem(){
        return $this->belongsTo(DiaDiem::class,'id_diadiem','id');
    }
    public function User(){
        return $this->belongsTo(User::class,'id_nguoidung','id');
    }
    
    public function HinhBaiViet(){
        return $this->hasMany(HinhBaiViet::class);
    }
    public function Like(){
        return $this->belongsTo(Like::class);
    }
    public function DisLike(){
        return $this->belongsTo(Disklike::class);
    }
    public function View(){
        return $this->belongsTo(View::class);
    }
    
}
   
