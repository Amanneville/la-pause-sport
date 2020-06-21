<?php

namespace App\Http\Controllers;

use App\Model\Session;
use App\Model\SessionUser;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{


    public function index()
    {

        $user = Auth::user();

        return view('users.sessions.index')->with('user', $user);

    }

    // Méthode pour afficher une session d'un utilisateur
    public function show($id)
    {
        // Mécanique avec validateur


        // Récupère la session
        $session = Session::where('id', $id)->first();

        //dd($session->users->count());

        return view('users.sessions.show')->with('session',$session);
    }

    public function store(Request $request)
    {
        $values = $request->all();
        $message = new Message();
        $message->from_id = Auth::id();
        $message->message = $values['message'];
        $message->session_id = $values['session'];
        $message->save();

        //dd($values);
        return back();
    }

    public function create(Request $request) // inscription dans une session d'un membre

    {
        //Je récupère l'id user
        $user = Auth::user();
        // Je récupère l'id de la session
        $values = $request->all();

        // J'instancie la classe SessionUser qui servira à créer une nouvelle asssociation (user/session)
        $inscription = new SessionUser();
        $inscription->user_id = $user->id;
        $inscription->session_id = $values['session_id'];

        // J'enregistre en BDD
        $inscription->save();

        return back()->with('user', $user);

    }

    public function destroy($id)
    {
        $user = auth::user();
        $idToDelete = SessionUser::all()
                         ->where('user_id', '=', $user->id)
                       ->where('session_id','=', $id)
                    ->keyBy('id');

        $sessionToDelete = SessionUser::all()
            ->where('user_id', '=', $user->id)
            ->where('session_id','=', $id);


        return back()->with($id);
    }

    public function update(Request $request, $id)
    {

        $user = auth::user();
        $idToDetatch = SessionUser::all()
            ->where('user_id', '=', $user->id)
            ->where('session_id','=', $id)
            ->keyBy('id');

         $usertofind = User::find($user->id);

         $usertofind->sessions()->detach($id);

            return back();
    }


}
