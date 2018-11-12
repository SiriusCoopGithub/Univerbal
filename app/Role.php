<?php

namespace App;

use App\Permission;
use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name', 'display_name', 'description',
  ];


      /**
     * Role
     */
    // public function permissions(){
    //   return $this->belongsToMany(Permission::class);
    // }
}
