<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPanelController extends Controller
{

    public function index()
    {  // Récupération des données de la table session
        $sessions = DB::table('sessions')->leftJoin('sports', 'sessions.sport_id', '=', 'sports.id')->get();
        //dd($sessions);

        // Retourne la liste des sessions existantes
        return view('admin.sessions-list')
            ->with('sessions', $sessions);
    }


}
