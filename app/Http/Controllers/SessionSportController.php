<?php

namespace App\Http\Controllers;

use App\Model\Session;
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
        // indentification de l'utilisateur
        $user = Auth::user();


        $user = Auth::user();

        $retailer = User::with('sports')->find($user->id)->dd();

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

    }
    public function yogaindex()

    {

        $user = Auth::user();

        $level = DB::table('level_sport_user')
            ->select('level_id')
            ->where('user_id', '=', $user->id)
            ->where('sport_id', '=', 2)
            ->get();

        $UserLevel = $level->pluck('level_id');

        $UserSportLevel = $UserLevel[0];

        $sessions = Session::all();

        $sessions = $sessions->where('sport_id', '=', 2)->where('niveau', '=', $UserSportLevel);;

        return view('yoga.index')->with('sessions', $sessions);

    }

    public function runningindex()
    {
        $user = Auth::user();

        $level = DB::table('level_sport_user')
            ->select('level_id')
            ->where('user_id', '=', $user->id)
            ->where('sport_id', '=', 3)
            ->get();

        $UserLevel = $level->pluck('level_id');

        $UserSportLevel = $UserLevel[0];
        $sessions = Session::all();
        $sessions = $sessions->where('sport_id', '=', 3)->where('niveau', '=', $UserSportLevel);

        return view('running.index')->with('sessions', $sessions);

    }
    public function fitnessindex()
    {
        $user = Auth::user();

        $level = DB::table('level_sport_user')
            ->select('level_id')
            ->where('user_id', '=', $user->id)
            ->where('sport_id', '=', 4)
            ->get();

        $UserLevel = $level->pluck('level_id');

        $UserSportLevel = $UserLevel[0];
        $sessions = Session::all();
        $sessions = $sessions->where('sport_id', '=', 4)->where('niveau', '=', $UserSportLevel);

        return view('fitness.index')->with('sessions', $sessions);

    }
}
