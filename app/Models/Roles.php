<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Roles extends Authenticatable
{
    protected $fillable = [
        'NameRole',
    ];
    
    public $timestamps = false;

    public function Users()
    {
        return $this->hasMany(Users::class);
    }
}
