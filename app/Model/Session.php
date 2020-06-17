<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'auteur_id',
        'sport_id',
        'heure_debut',
        'heure_fin',
        'date',
        'adresse',
        'code_postal',
        'ville',
        'niveau',
        'nb_max_participants',
        'prix',
        'note',
        'chat_id'
    ];

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    public function sessionuserlevel()
    {
        return $this->hasMany(SportUser::class);
    }
}


