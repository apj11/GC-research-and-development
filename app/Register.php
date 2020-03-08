<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Register extends Authenticatable
{
    //
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden= [
        'password', 'remember_token',
    ];
}
