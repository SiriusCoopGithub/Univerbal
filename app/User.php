<?php

namespace App;

use App\Role;
use App\Option;
use App\Mission;
use App\Profile;
use App\Permission;
use App\Organisation;
use Illuminate\Support\Facades\Hash;
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
        'name', 'email', 'active', 'password',
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
     * Hash the password of the user before storing it in the DB
     */
    public function setPasswordAttribute($userPassword)
    {
        return $this->attributes['password'] = Hash::needsRehash($userPassword) ? Hash::make($userPassword) : $userPassword;
    }



   /**
     * Profile for the user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profilable()
    {
        return $this->morphMany(Profile::class, 'profilable');
    }


    /**
     * Option
     */
    public function option(){
      return $this->hasOne(Option::class);
    }

    /**
     * Organisation
     */
    public function organisations(){
      return $this->belongsToMany(Organisation::class);
    }

    /**
     * Organisation
     */
    // public function organisationname(){
    //   return $this->belongsToMany(Organisation::class)->select('name');
    // }

    /**
     * Mission
     */
    public function missions(){
      return $this->hasMany(Mission::class);
    }


    /**
     * Role
     */
    public function roles(){
      return $this->belongsToMany(Role::class);
    }

    /**
     * Role
     */
    public function permissions(){
      return $this->belongsToMany(Permission::class);
    }

    /**
     * Role
     */
    public function teams(){
      return $this->belongsToMany(Team::class);
    }
}
