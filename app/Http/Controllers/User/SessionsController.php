<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        $sessions = Session::user()->get();

        dd($sessions);

    }
}
