<?php

namespace App\Http\Controllers;

use App\Model\LevelSportUser;
use App\Model\RoleUser;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class creationSessionYoga extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname'     => ['required', 'string', 'max:255'],
            'lastname'      => ['required', 'string', 'max:255'],
            'age'           => ['required', 'int', 'max:150'],
            'adresse'       => ['required', 'string', 'max:255'],
            'code_postal'   => ['required', 'string'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Créer un nouvel utilisateur après validation des données du formulaire
     * Créer une nouvelle association utilisateur/sport/niveau
     *
     * @param  array  $data
     * @return \App\Model\User
     * @return \App\Model\LevelSportUser
     * * @return \App\Model\RoleUser
     */
    protected function create(array $data)
    {
        $user = User::create([
            'firstname'     => $data['firstname'],
            'lastname'      => $data['lastname'],
            'age'           => $data['age'],
            'adresse'       => $data['adresse'],
            'code_postal'   => $data['code_postal'],
            'email'         => $data['email'],
            'password'      => Hash::make($data['password']),
        ]);

        LevelSportUser::create([

            'id_user'            => $user->id,
            'id_sport'           => $data['sportYoga'],
            'user_current_level' => $data['niveauSportYoga'],

        ]);

        return $user;
    }


}
