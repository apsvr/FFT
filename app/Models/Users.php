<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Authenticatable
{
    protected $fillable = [
        'role_id',
        'name',
        'photoUser',
        'login',
        'password',
    ];
    
    public $timestamps = false;
    
    protected $casts = [
        'password' => 'hashed',
    ];    

    public function role()
    {
        return $this->belongsTo(Roles::class);
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }
}
