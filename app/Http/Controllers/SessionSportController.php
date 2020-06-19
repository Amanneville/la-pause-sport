<?php

namespace App\Http\Controllers;

use App\Model\Session;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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



      $sessions = Session::all();
        //$sessions->where('sport_id', '=', '1');

      $sessions = $sessions->where('sport_id', '=', 1);
        //dd($sessions->sports);
        return view('musculation.index')->with('sessions', $sessions);

    }
    public function yogaindex()
    {
        $sessions = Session::all();
        $sessions = $sessions->where('sport_id', '=', 2);

        return view('yoga.index')->with('sessions', $sessions);

    }
    public function runningindex()
    {
        $sessions = Session::all();
        $sessions = $sessions->where('sport_id', '=', 3);

        return view('running.index')->with('sessions', $sessions);

    }
    public function fitnessindex()
    {
        $sessions = Session::all();
        $sessions = $sessions->where('sport_id', '=', 4);

        return view('fitness.index')->with('sessions', $sessions);

    }
}
