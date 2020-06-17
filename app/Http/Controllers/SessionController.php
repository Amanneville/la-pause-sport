<?php

namespace App\Http\Controllers;

use App\Model\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $users = DB::table('users')

            ->leftJoin('level_sport_users', 'users.id', '=', 'level_sport_users.user_id')
            ->where('user_id', '=', $user->id )
            ->leftJoin('sessions', 'sessions.id_sport', '=', 'level_sport_users.id_sport')
            ->whereRaw('niveau = level_sport_users.user_current_level')
            ->whereDate('date', '>=', Carbon::now() )
            ->leftJoin('session_users', 'session_users.session_id', '=', 'sessions.id')
            ->where('sessions.nb_max_participants', '<', '15')
            ->get();


        return view ('session.index');
}
}
