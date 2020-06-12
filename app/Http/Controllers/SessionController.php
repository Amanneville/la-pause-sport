<?php

namespace App\Http\Controllers;


use App\Model\Session;
use Illuminate\Http\Request;

use App\LevelSportUser;
use App\Session;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SessionController extends Controller
{
    public function index()
    {

        return view ('session.index');

        // Afficher toutes les sessions de tous les sports

        $sessions = Session::all();

        return view('session-list.index')->with('sessions', $sessions);
    }

    public function AfficheSessionLvl()

    {
        // Principe : Affiche les sessions relatives au sport et au niveau de l'utilisateur.

        /*
         * 1 - je récupère l'id de l'utilisateur, son ou ses sport(s) et son niveau dans chacun de ses sports;
         * 2 - je récupère uniquement les sessions qui le concerne;
         * 3 - Je renvoie les infos dans la vue
         */

        $user = DB::table('users')
            ->leftJoin('level_sport_users', 'users.id', '=', 'level_sport_users.id_user')
            ->where('id_user', '=', 45 )
            ->get();
        dd($user);

    }
}
