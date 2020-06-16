<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'id_auteur',
        'id_sport',
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

    // Retourne tous les utilisateurs sauf le coach
    public function users(){
        return $this->belongsToMany(User::class);
    }

    // Retourn le coach
    public function coach()
    {
        return $this->belongsTo(User::class,   'id_auteur', 'id');
    }

    // Retourne tous les messages de la session

    public function messages()
    {
        return $this->hasMany(Message::class)->orderByDesc('created_at');
    }

}


