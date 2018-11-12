<?php

namespace App;

use App\User;
use App\Profile;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    /**
     * Profile for the organisation.
     */
    public function profilable()
    {
        return $this->morphMany(Profile::class, 'profilable');
    }

    /**
     * users for each organisations.
     */
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * users for each organisations.
     */
    // public function username()
    // {
    //     return $this->belongsToMany(User::class)->select('name');
    // }

}
