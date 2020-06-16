<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['name', 'condition', 'description'];
    public $timestamps = false;


}
