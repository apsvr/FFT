<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Holidays extends Authenticatable
{
    protected $fillable = [
        'nameHoliday',
        'code'
    ];
    
    public $timestamps = false;
    
    public function bouquets()
    {
        return $this->hasMany(Bouquet::class);
    }
}
