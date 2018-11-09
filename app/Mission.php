<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    /**
     * Mission
     */
    public function user(){
      return $this->belongsTo(User::class);
    }
}
