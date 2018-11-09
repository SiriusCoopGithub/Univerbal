<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    public function showAll(){
      return $this->hasMany(Missions::class);
    }

    public function show(Missions $missions)
    {

    }
}
