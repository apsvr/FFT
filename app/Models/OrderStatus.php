<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class OrderStatus extends Authenticatable
{
    protected $fillable = [
        'nameOrderStatus',
    ];
    
    public $timestamps = false;
    
    public function Orders()
    {
        return $this->hasMany(Order::class);
    }
}
