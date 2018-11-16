<?php

namespace App;

use App\User;
use App\Mission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Langue extends Model
{

  // use SoftDeletes;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'abbr', 'name', 'active', 'description', 'dialect', 'country'
  ];

      /**
     * Get the users .
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Get the langues .
     */
    public function missions()
    {
        return $this->belongsToMany(Mission::class);
    }


}
