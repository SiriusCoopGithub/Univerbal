<?php

namespace App;

use App\Adresse;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    public function profile(){
      return $this->hasMany(Adresse::class);
    }
}
