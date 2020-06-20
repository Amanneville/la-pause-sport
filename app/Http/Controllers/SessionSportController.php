<?php

namespace App\Http\Controllers;

use App\Model\LevelSportUser;
use App\Model\Session;
use App\Model\Sport;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SessionSportController extends Controller
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
    public function musculationindex()

    {
        $sessions = Session::where('sport_id', 1)->where('date' ,'>=', date('Y-m-d'))->get();
        return view('sports.musculation.index')->with('sessions', $sessions);
/*
        // Recherche de son niveau dans le sport

        $level = DB::table('level_sport_user')
        ->select('level_id')
        ->where('user_id', '=', $user->id)
        ->where('sport_id', '=', 1)
        ->get();

        $UserLevel = $level->pluck('level_id');

        $UserSportLevel = $UserLevel[0];

        // Appel BDD sur toutes les sessions
        $sessions = Session::all();

        // tri des sessions en fonction du sport et du niveau de l'utilisateur
        $sessions = $sessions->where('sport_id', '=', 1)->where('niveau', '=', $UserSportLevel);

        return view('musculation.index')->with('sessions', $sessions);
*/
    }

    public function yogaindex()

    {

        $sessions = Session::where('sport_id', 2)->where('date' ,'>=', date('Y-m-d'))->get();

        return view('sports.yoga.index')->with('sessions', $sessions);

    }

    public function runningindex()
    {

        $sessions = Session::where('sport_id', 3)->where('date' ,'>=', date('Y-m-d'))->get();

        return view('sports.running.index')->with('sessions', $sessions);

    }
    public function fitnessindex()
    {
        $sessions = Session::where('sport_id', 4)->where('date' ,'>=', date('Y-m-d'))->get();

        return view('sports.fitness.index')->with('sessions', $sessions);

    }
}
