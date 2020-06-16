<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelSportUser extends Model
{
    protected $fillable = [
        'id_user', 'id_sport', 'user_current_level'
    ];
    protected $table = 'level_sport_user';
    public $timestamps = false;

}
