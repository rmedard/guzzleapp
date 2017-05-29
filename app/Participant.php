<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participant extends Model
{
    protected $fillable = ['nom', 'prenom', 'telephone', 'email', 'password', 'type'];

    public function activites(){
        $this->belongsToMany(Activite::class);
    }
}
