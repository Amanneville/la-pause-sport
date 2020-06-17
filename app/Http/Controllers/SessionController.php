<?php

namespace App\Http\Controllers;

use App\Model\LevelSportUser;
use App\Model\Session;
use App\Model\SessionUser;
use App\Model\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{


    public function index()
    {
        // Afficher formulaire de création de session

        return view('create-session.index');
    }

    public function createsession()
    {
        // Afficher formulaire de création de session

        return view('create-session.index');
    }
    public function create(Request $request){

            $values = $request->all();
          //  dd($values);
        $author = Auth::user();

        $session = Session::create([

                'id_auteur'             => $author->id,
                'id_sport'              => $values['sport'],
                'heure_debut'           => $values['heure_debut'],
                'heure_fin'             => $values['heure_fin'],
                'date'                  => $values['date'],
                'adresse'               => $values['adresse'],
                'ville'                 => $values['ville'],
                'code_postal'           => $values['code_postal'],
                'niveau'                => $values['niveau'],
                'nb_max_participants'   => $values['nb_max_participants'],
                'prix'                  => $values['prix'],

            ]);

            return $session;

    }


}
