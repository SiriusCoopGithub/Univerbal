<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'abbr_langue', 'langue_name',
  ];
}
