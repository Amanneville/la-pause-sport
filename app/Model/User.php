<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'age', 'adresse', 'code_postal', 'avatar', 'email','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Model\Role')->using('App\Model\RoleUser');
    }

   public function sessions()
    {
        return $this->belongsToMany(Session::class);
    }

    public function sports()
    {
        return $this->belongsToMany('App\Model\Sport', 'level_sport_user', 'user_id', 'sport_id')->withPivot('level_id');
    }
    public function levels()
    {
        return $this->belongsToMany('App\Model\Level', 'level_sport_user', 'user_id', 'level_id')->withPivot('sport_id');
    }

}
