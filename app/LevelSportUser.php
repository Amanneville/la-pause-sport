<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class LevelSportUser extends Pivot
{
    protected $table = 'level_sport_user';
}
