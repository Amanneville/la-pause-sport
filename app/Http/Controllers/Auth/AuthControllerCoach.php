<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;
use Illuminate\Support\Facades\Hash;
use Dotenv\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersCoach;
use Illuminate\Http\Request;

class AuthControllerCoach extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersCoach, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname'     => $data['firstname'],
            'lastname'      => $data['lastname'],
            'age'           => $data['age'],
            'adresse'       => $data['adresse'],
            'code_postal'   => $data['code_postal'],
            'email'         => $data['email'],
            'avatar'         => $data['avatar'],
            'password'      => Hash::make($data['password']),

        ]);
    }


    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegisterCoach()
    {
        return view('auth.registerCoach');
    }


}
