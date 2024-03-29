<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Reviews extends Authenticatable
{
    protected $fillable = [
        'bouquet_id',
        'user_id',
        'review',
        'ratingBouquet',
        'date',
    ];
    
    public $timestamps = false;
    
    public function bouquet()
    {
        return $this->belongsTo(Bouquet::class);
    }

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
