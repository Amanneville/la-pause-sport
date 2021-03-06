<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Model\User;
use App\Model\LevelSportUser;
use App\Model\RoleUser;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        //dd($data);

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

            'user_id'            => $user->id,
            'sport_id'           => $data['sportYoga'],
            'level_id' => $data['niveauSportYoga'],

        ]);

        LevelSportUser::create([

            'user_id'               => $user->id,
            'sport_id'              => $data['sportMusculation'],
            'level_id'    => $data['niveauSportMusculation'],
        ]);
        LevelSportUser::create([

            'user_id'               => $user->id,
            'sport_id'              => $data['sportRunning'],
            'level_id'    => $data['niveauSportRunning'],
        ]);

        LevelSportUser::create([
            'user_id'               => $user->id,
            'sport_id'              => $data['sportFitness'],
            'level_id'    => $data['niveauSportFitness'],
        ]);

        RoleUser::create([
            'user_id'               => $user->id,
            'role_id'              => $data['role'],
        ]);

        return $user;
    }

}
