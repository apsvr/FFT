<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Order extends Authenticatable
{
    protected $fillable = [
        'user_id',
        'bouquet_id',
        'orderStatus_id',
        'orderDate',
        'address',
        'wishes',
    ];
    
    public $timestamps = false;
    
    public function bouquet()
    {
        return $this->belongsTo(Bouquet::class);
    }

    public function OrderStatus()
    {
        return $this->belongsTo(OrderStatus::class);
    }
}
