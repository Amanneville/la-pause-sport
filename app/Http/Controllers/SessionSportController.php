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



<<<<<<< HEAD
        $session = Session::all();

        return view('musculation.index')->with('session', $session);
=======
        $sessions = Session::all();

        return view('musculation.index')->with('sessions', $sessions);
>>>>>>> c1e07ef163405df5d85486b0e4474acde9f3e51f

    }
    public function yogaindex()
    {
<<<<<<< HEAD
        $session = Session::all();

        return view('yoga.index')->with('session', $session);
=======
        $sessions = Session::all();
        return view('yoga.index')->with('sessions', $sessions);
>>>>>>> c1e07ef163405df5d85486b0e4474acde9f3e51f

    }
    public function runningindex()
    {
<<<<<<< HEAD
        $session = Session::all();

        return view('running.index')->with('session', $session);
=======
        $sessions = Session::all();

        return view('running.index')->with('sessions', $sessions);
>>>>>>> c1e07ef163405df5d85486b0e4474acde9f3e51f

    }
    public function fitnessindex()
    {
<<<<<<< HEAD
        $session = Session::all();

        return view('fitness.index')->with('session', $session);
=======
        $sessions = Session::all();

        return view('fitness.index')->with('sessions', $sessions);
>>>>>>> c1e07ef163405df5d85486b0e4474acde9f3e51f

    }
}
