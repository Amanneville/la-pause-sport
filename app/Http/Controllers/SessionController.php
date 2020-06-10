<?php

namespace App\Http\Controllers\Session;

use App\Model\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
       return view ('session.index');
    }
}
