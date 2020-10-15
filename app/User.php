<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Silber\Bouncer\Database\HasRolesAndAbilities;

class User extends Authenticatable
{
    use Notifiable,HasRolesAndAbilities;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

   // protected $guarded = [' '];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function  role()
    {
        return $this->belongsTo('App\Role');
    }

    public function Book ()
    {
        return $this->hasMany('App\Booking');
    }

    public function Teacher()
    {
        return $this->hasOne('App\Teacher', 'user_id', 'id');
    }

    public function Product ()
    {
        return $this->belongsTo('App\Product');
    }


}
