<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Bouquet extends Authenticatable
{
    protected $fillable = [
        'holiday_id',
        'photoBouquet',
        'nameBouquet',
        'price',
    ];
    
    public $timestamps = false;
    
    public function holiday()
    {
        return $this->belongsTo(Holidays::class);
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
