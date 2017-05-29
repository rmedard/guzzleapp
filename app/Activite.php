<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activite extends Model
{
    protected $fillable = ['id', 'nom', 'type', 'description', 'date', 'lieu'];

    public function participants(){
        return $this->belongsToMany(Participant::class);
    }
}
