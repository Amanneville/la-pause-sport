<?php

namespace App\Http\Controllers;

use App\Model\Session;
use App\Model\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionListController extends Controller
{
    public function index()
    {  // Récupération des données de la table session
        $sessions = DB::table('sessions')->leftJoin('sports', 'sessions.id_sport', '=', 'sports.id')->get();
        //dd($sessions);

       // Retourne la liste des sessions existantes
        return view('session.session-list')
            ->with('sessions', $sessions);
    }
}
