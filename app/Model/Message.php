<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['from_id', 'message', 'session_id'];

    // récupère l'auteur du message
    public function from()
    {
        return $this->belongsTo(User::class, 'from_id', 'id');
    }

}

