<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'id',
    //     'ngaydang',
    //     'tenquan',
        
    // ];
    protected $guard =[];
    public function KhachSan(){
        return $this->belongsTo(KhachSan::class);
    }
    public function QuanAn(){
        return $this->belongsTo(QuanAn::class);
    }
    public function DiaDiem(){
        return $this->belongsTo(DiaDiem::class);
    }
    public function DacSan(){
        return $this->belongsTo(DacSan::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
   
