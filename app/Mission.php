<?php

namespace App;

use App\User;
use App\Langue;
use App\Organisation;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    /**
     * Mission
     */
    public function user(){
      return $this->belongsTo(User::class);
    }

    /**
     * Langue
     */
    public function langue(){
      return $this->belongsToMany(Langue::class);
    }

        /**
     * Mission
     */
    public function organisation(){
      return $this->belongsTo(Organisation::class);
    }
}
