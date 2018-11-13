<?php

namespace App;

use App\Profile;
use App\Organisation;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use App\Http\Requests\CreateUserRequest;
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

    // protected $with = ['profilable.users'];
    // protected $withOrganisations = ['profilable.organisations'];

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
     * Create a user
     */
    // public function scopeStoreNewUser(CreateUserRequest $request){

    //   $this->create([
    //     'name'      => $request->input('name'),
    //     'email'     => $request->input('email'),
    //     'active'    => $request->input('active'),
    //     'password'  => $request->input('password'),
    //   ]);

    //   $profilable = $this->profilable()->create([
    //     'user_type'   => $request->input('user_type'),
    //     'last_name'   => $request->input('name'),
    //     'first_name'  => $request->input('first_name'),
    //     'gsm'         => $request->input('gsm'),
    //     'telephone'   => $request->input('telephone'),
    //     'email'       => $request->input('email'),
    //     'titre'       => $request->input('titre'),
    //     'genre'       => $request->input('genre'),
    //   ]);

    //   $adresse = $profilable->adresse()->create([
    //     'street_num'  => $request->input('street_num'),
    //     'box_num'     => $request->input('box_num'),
    //     'street_name' => $request->input('street_name'),
    //     'postal_code' => $request->input('postal_code'),
    //     'city_name'   => $request->input('city_name'),
    //     'country'   => 'Belgique',
    //   ]);

    //   return $this;

    // }

}
