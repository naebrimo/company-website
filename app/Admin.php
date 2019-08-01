<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    public $incrementing = TRUE;

    public $timestamps = TRUE;

    protected $fillable = [
        'id', 'name', 'email', 'username', 'password', 'active',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
