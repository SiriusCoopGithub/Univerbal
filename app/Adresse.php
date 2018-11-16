<?php

namespace App;

use App\Adresse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adresse extends Model
{

  use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'street_num', 'box_num', 'street_name', 'postal_code', 'box_num,'
  ];


    /**
     *
     */
    public function profile(){
      return $this->hasMany(Adresse::class);
    }


    /**
     * Get all of the posts for the country.
     */
    public function userAdress()
    {
        return $this->hasManyThrough('App\User', 'App\Profile');
    }
}
