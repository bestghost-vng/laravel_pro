<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CtUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'hoten',
        'diachi',
        'sdt',
        'gioitinh',
        'id_user',
    ];
    protected $guard =[];

    public function User(){
        return $this->belongsTo(User::class,'id_user','id');
    }
}
