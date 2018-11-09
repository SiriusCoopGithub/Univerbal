<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Profile
     */
    public function profile(){
      return $this->hasOne(Profiles::class);
    }

    /**
     * adresse
     */
    public function adresse(){
      return $this->hasOne(Adresses::class);
    }

    /**
     * organisations
     */
    public function organisations(){
      return $this->hasOne(Organisations::class);
    }

    /**
     * missions
     */
    public function missions(){
      return $this->hasOne(Missions::class);
    }
}
