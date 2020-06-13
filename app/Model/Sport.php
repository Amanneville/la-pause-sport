<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User')->using('App\LevelSportUser');
    }
}
