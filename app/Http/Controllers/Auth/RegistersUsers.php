<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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
            'prenom' => ['required', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'naissance' => ['required', 'date', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'codePostal' => ['required', 'int', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'sport1' => ['required', 'string', 'max:255'],
            'sport2' => ['required', 'string', 'max:255'],
            'sport3' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'created' => ['required', 'timestamp', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'prenom' => $data['prenom'],
            'nom' => $data['nom'],
            'naissance' => $data['naissance'],
            'adresse' => $data['adresse'],
            'codePostal' => $data['codePostal'],
            'ville' => $data['ville'],
            'email' => $data['email'],
            'sport1' => $data['sport1'],
            'sport2' => $data['sport2'],
            'sport3' => $data['sport3'],
            'created' => $data['created'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
