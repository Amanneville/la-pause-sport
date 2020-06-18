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



        $session = Session::all();

        return view('musculation.index')->with('session', $session);

    }
    public function yogaindex()
    {
        $session = Session::all();

        return view('yoga.index')->with('session', $session);

    }
    public function runningindex()
    {
        $session = Session::all();

        return view('running.index')->with('session', $session);

    }
    public function fitnessindex()
    {
        $session = Session::all();

        return view('fitness.index')->with('session', $session);

    }
}
