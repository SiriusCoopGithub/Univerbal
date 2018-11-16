<?php

namespace App;

use App\Adresse;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    // use SoftDeletes;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'last_name', 'first_name', 'abbr', 'gsm', 'telephone', 'email', 'titre', 'genre'
  ];

    public function getFillable() {
        return $this->fillable;
    }

    /**
     * Profile for the organisation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adresse(){
      return $this->hasOne(Adresse::class);
    }

    /**
     * Profile for the organisation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profilable(){
      return $this->morphTo();
    }
}
