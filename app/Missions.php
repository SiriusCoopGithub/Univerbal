<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Missions extends Model
{
    public function showAll(){
      return $this->hasMany(Missions::class);
    }

    public function show(Missions $missions)
    {

    }
}
