<?php

namespace App\Models;

use App\Models\Tblappadmin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tblappadmin extends Authenticatable
{
    
    use HasFactory,Notifiable;
    protected $fillable = ['ecno','firstname','surname','usertype','department','status','password'];

/**
        * The attributes that should be hidden for serialization.
        *
        * @var array<int, string>
        */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $guard=['admin'];

    public function setPasswordAttribute($value)
    {
    $this->attributes['password'] = bcrypt($value);
    }

    public function scopeIsActive($query)
    {
        return $query->where('is_active',1);
    }

    public function getAuthPassword()
    {
    return $this->password;
    }
}
