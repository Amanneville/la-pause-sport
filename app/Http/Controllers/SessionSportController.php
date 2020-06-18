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

        return view('musculation.index')->with('sessions', $sessions);

    }
    public function yogaindex()
    {
        $sessions = Session::all();
        return view('yoga.index')->with('sessions', $sessions);

    }
    public function runningindex()
    {
        $sessions = Session::all();

        return view('running.index')->with('sessions', $sessions);

    }
    public function fitnessindex()
    {
        $sessions = Session::all();

        return view('fitness.index')->with('sessions', $sessions);

    }
}
