<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['from', 'to', 'message', 'is_read', 'session_id'];
}
