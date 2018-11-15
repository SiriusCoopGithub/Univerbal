<?php

namespace App;

use App\User;
use App\Langue;
use App\Organisation;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'user_id','date', 'objet', 'note_perso', 'note_interp', 'estimed_time', 'sexe_interp', 'facture_num', 'statuts', 'organisation_id', 'interprete_id', 'created_by',
  ];

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
