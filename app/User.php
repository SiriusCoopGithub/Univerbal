<?php

namespace App;

use App\Option;
use App\Mission;
use App\Profile;
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
        'email', 'password',
    ];
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

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
    public function profile()
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
    public function organisation(){
      return $this->belongsToMany(Organisation::class)->withTimestamps();
    }

    /**
     * Mission
     */
    public function mission(){
      return $this->hasMany(Mission::class);
    }
}
