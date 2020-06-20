<?php

namespace App\Http\Controllers;

use App\Model\Session;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // PAUL auth::user()->levels->sport(1)->level_id;
            $userId = Auth::user();

        $users = User::find($userId->id)->levels;


        // Récupére toutes les sessions avec le nom du sport
        $sessions =  Session::all();

        return view('home')->with('sessions', $sessions);
    }
}
