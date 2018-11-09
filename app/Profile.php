<?php

namespace App;

use App\Adresse;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{


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
    public function belongsTo(){
      return $this->morphTo();
    }
}
