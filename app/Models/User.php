<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,SoftDeletes;

    // Role Users
    const ADMIN = 1;
    const AUTHOR = 2;
    const SUBSCRIBER = 3;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guarded = [
        'role'
    ];

    public static function getRoles()
    {
        return [
            self::ADMIN => "مدیر سیستم",
            self::AUTHOR => "نویسنده",
            self::SUBSCRIBER => "کاربر عادی"
        ];
    }
}
