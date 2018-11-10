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
    public function profile()
    {
        return $this->morphMany(Profile::class, 'profilable');
    }

    /**
     * users for each organisations.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

}
