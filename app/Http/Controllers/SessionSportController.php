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

    public function index($id)
    {
        // Récupère infos de la session avec le nom du sport
        $sessions = Session::where('id', $id)->first();
        return view('sports.infos-session')->with('sessions', $sessions);
    }

//    MUSCULATION
    public function musculationindex()
    {
        $sessions = Session::where('sport_id', 1)->where('date' ,'>=', date('Y-m-d'))->get();
        return view('sports.musculation.index')->with('sessions', $sessions);
    }

//    YOGA
    public function yogaindex()
    {
        $sessions = Session::where('sport_id', 2)->where('date' ,'>=', date('Y-m-d'))->get();
        return view('sports.yoga.index')->with('sessions', $sessions);
    }

//   RUNNING
  public function runningindex()
    {
        $sessions = Session::where('sport_id', 3)->where('date' ,'>=', date('Y-m-d'))->get();
        return view('sports.running.index')->with('sessions', $sessions);
    }

        //    FITNESS
    public function fitnessindex()
    {
        $sessions = Session::where('sport_id', 4)->where('date' ,'>=', date('Y-m-d'))->get();
        return view('sports.fitness.index')->with('sessions', $sessions);
    }
}
