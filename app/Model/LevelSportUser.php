<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LevelSportUser extends Model
{
    protected $fillable = [
        'id_user', 'id_sport', 'user_current_level'
    ];

    public $timestamps = false;

}
