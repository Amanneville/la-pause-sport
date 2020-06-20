<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\Model\User')->using('App\Model\SportUser');
    }

    public function user()
    {
        return $this->belongsToMany(User::class,'level_sport_user' );
    }

    public function sessions ()
    {
        return $this->belongsTo(Sport::class, 'sport_id');
    }


}
