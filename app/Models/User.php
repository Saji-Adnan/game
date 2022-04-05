<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{

    protected $hidden = [
        'password', 'fcm_token', 'created_at', 'updated_at'
    ];

    protected $fillable = ['name', 'logo'];

}
