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

        return view('sessionsmusculation');

    }
    public function yogaindex()
    {
        $session = Session::all();

        return view('sessionsyoga');

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
