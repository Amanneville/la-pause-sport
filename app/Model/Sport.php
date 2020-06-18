<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\Model\User')->using('App\Model\SportUser');
    }
}
