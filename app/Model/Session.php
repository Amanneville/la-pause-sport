<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'id_auteur',
        //'id_sport',
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
}
