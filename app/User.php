<?php

namespace App;

use App\Option;
use App\Mission;
use App\Profile;
use App\Organisation;
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
        'name', 'email', 'password',
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
     * Add an user
     */
    // public function addUser($request){
    //     $user = User::create([
    //         'name'      => request('name'),
    //         'email'     => request('email'),
    //         'password'  => Hash::make(request('password')),
    //     ]);

    //     return $user;
    // }


    /**
     * Profile
     */
    public function profile(){
      return $this->hasOne(Profile::class);
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
    public function option(){
      return $this->hasOne(Organisation::class);
    }

    /**
     * Mission
     */
    public function mission(){
      return $this->hasMany(Mission::class);
    }
}
