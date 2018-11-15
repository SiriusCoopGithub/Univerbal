<?php

namespace App;

use App\User;
use App\Profile;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name', 'contact_id',
  ];
    /**
     * Profile for the organisation.
     */
    public function profilable()
    {
        return $this->morphMany(Profile::class, 'profilable');
    }

    /**
     * users for each organisations.
     */
    public function user()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    /**
     * Mission
     */
    public function missions(){
      return $this->hasMany(Mission::class);
    }

    /**
     * users for each organisations.
     */
    // public function username()
    // {
    //     return $this->belongsToMany(User::class)->select('name');
    // }

}
