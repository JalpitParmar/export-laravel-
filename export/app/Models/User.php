<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{ protected $table = 'user';
    protected $fillable = [
        'username',
        'password',
        'email',
        'phone_number',
        'bio',
        'business_address',
        'business_hours',
    ];

    protected $hidden = [
        'password',
    ];

    public $timestamps = false;
}