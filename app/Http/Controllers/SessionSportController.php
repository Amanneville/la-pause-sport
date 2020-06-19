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

}
