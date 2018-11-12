<?php

namespace App;

use App\Profile;
use App\Organisation;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

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

}
