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
        // Afficher toutes les sessions futures

       $sessions = Session::all();
        //dd($sessions->where('date', '>=', Carbon::now() ));
        return view('all-sessions.index')->with('sessions', $sessions);

        // Afficher toutes les sessions de musculation
        //$sessions = Session::all();
        //dd($sessions->where('date', '>=', Carbon::now() )->where('id_sport', '=', '1'));

        // Afficher toutes les sessions de yoga
        //$sessions = Session::all();
        //dd($sessions->where('date', '>=', Carbon::now() )->where('id_sport', '=', '2'));

        // Afficher toutes les sessions de running
        //$sessions = Session::all();
        //dd($sessions->where('date', '>=', Carbon::now() )->where('id_sport', '=', '3'));

        // Afficher toutes les sessions de fitness
        //$sessions = Session::all();
        //dd($sessions->where('date', '>=', Carbon::now() )->where('id_sport', '=', '4'));
    }


    public function AfficheSessionLvl()

    {
        {
            // Principe : Affiche les sessions, non commencées, relatives au sport et au niveau de l'utilisateur

            /*
             * 1 - je récupère l'id de l'utilisateur, son ou ses sport(s) et son niveau dans chacun de ses sports;
             * 2 - je récupère uniquement les sessions qui le concerne;
             * 3 - Je renvoie les infos dans la vue
             */

            $user = Auth::user();
          //  dd($user);

            $sessionlevel = Session::all();
         //   dd($sessionlevel->userlevel());

            //$usersports = $user->levels->pluck('id_sport', 'user_current_level')->all();

            //dd($usersports);

            //$user->levels()

            //dd($user->getAuthIdentifier());
/*
           $users = DB::table('users')
                        ->leftJoin('level_sport_users', 'users.id', '=', 'level_sport_users.user_id')
                        ->where('user_id', '=', $user->id )
                        ->leftJoin('sessions', 'sessions.id_sport', '=', 'level_sport_users.id_sport')
                        ->whereRaw('niveau = level_sport_users.user_current_level')
                        ->whereDate('date', '>=', Carbon::now() )
                        ->leftJoin('session_users', 'session_users.session_id', '=', 'sessions.id')
                        ->where('sessions.nb_max_participants', '<', '15')
                        ->get();

             dd($users);
*/

            // $sessions = SessionUser::all();
            // dd($sessions->where('session_id', '=', 69)->count());

        }

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

                'auteur_id'             => $author->id,
                'sport_id'              => $values['sport'],
                'heure_debut'           => $values['heure_debut'],
                'heure_fin'             => $values['heure_fin'],
                'date'                  => $values['date'],
                'adresse'               => $values['adresse'],
                'ville'                 => $values['ville'],
                'code_postal'           => $values['code_postal'],
                'niveau'                => $values['level_id'],
                'nb_max_participants'   => $values['nb_max_participants'],
                'prix'                  => $values['prix'],

            ]);

            return;

    }


}
