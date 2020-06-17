<?php

namespace App\Http\Controllers;

use App\Model\Session;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsSportController extends Controller
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

        dd($session);

        return view('musculation.index')->with('session', $session);

    }
    public function yogaindex()
    {
        $session = Session::all();

        return view('yoga.index');

    }
    public function runningindex()
    {
        $session = Session::all();

        return view('sessionsrunning');

    }
    public function fitnessindex()
    {
        $session = Session::all();

        return view('sessionsfitness');

    }
}
