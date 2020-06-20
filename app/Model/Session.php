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
        return $this->belongsToMany(Sport::class);
    }

    // Retourne tous les utilisateurs sauf le coach
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function session_users()
    {
        return $this->hasMany(SessionUser::class);
    }

    // Retourn le coach
    public function coach()
    {
        return $this->belongsTo(User::class,   'auteur_id', 'id');
    }

    // Retourne le nom du sport
    public function sports()
    {
        return $this->belongsTo(Sport::class, 'sport_id', 'id');
    }


    // Retourne tous les messages de la session
    public function messages()
    {
        return $this->hasMany(Message::class)->orderByDesc('created_at');
    }

}
