<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SessionUser extends Model
{
    protected $table = 'session_user';


    public $timestamps = false;


    public function sessions()
    {

    }
}
