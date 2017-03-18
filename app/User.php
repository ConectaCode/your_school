<?php

namespace YourSchool;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function generatePassword($password = null)
    {
        return $password ? bcrypt($password) : bcrypt(str_random(10));
    }

    public function person()
    {
        return $this->hasOne(Person::class);
    }
}
