<?php

namespace App\Http\Controllers;

use App\LevelSportUser;
use App\Session;
use App\SessionUser;
use App\User;
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

    public function AfficheSessionLvl()

    {
        // Principe : Affiche les sessions, non commencées, relatives au sport et au niveau de l'utilisateur

        /*
         * 1 - je récupère l'id de l'utilisateur, son ou ses sport(s) et son niveau dans chacun de ses sports;
         * 2 - je récupère uniquement les sessions qui le concerne;
         * 3 - Je renvoie les infos dans la vue
         */
        $user = Auth::user();

        //dd($user->getAuthIdentifier());

        $users = DB::table('users')
            ->leftJoin('level_sport_users', 'users.id', '=', 'level_sport_users.id_user')
            ->where('id_user', '=', $user->id )
            ->leftJoin('sessions', 'sessions.id_sport', '=', 'level_sport_users.id_sport')
            ->whereRaw('niveau = level_sport_users.user_current_level')
            ->whereDate('date', '>=', Carbon::now() )
            ->leftJoin('session_users', 'session_users.session_id', '=', 'sessions.id')
            ->where('sessions.nb_max_participants', '<', '15')
            ->get();

       // dd($users);

      // $sessions = SessionUser::all();
       // dd($sessions->where('session_id', '=', 69)->count());

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

              Session::create([

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

            return;

    }


}
