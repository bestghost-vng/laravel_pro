<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $guard =[];
    public function BaiViet(){
        return $this->hasMany(BaiViet::class);
    }
    public function Like(){
        return $this->hasMany(Like::class);
    }
    public function DisLike(){
        return $this->hasMany(Disklike::class);
    }
    public function View(){
        return $this->hasMany(View::class);
    }
    public function CTUser(){
        return $this->belongsTo(CtUser::class);
    }
}
