<?php

namespace App\Http\Controllers;

use App\Model\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Afficher formulaire de création de session

        return view('users.coach.create-session.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('toto');
        $values = $request->all();
        $author = Auth::user();

        $rules = [
            'sport_id'              => 'required|numeric',
            'date'                  => 'required|date|date_format:Y-m-d|after_or_equal:today',
            'titre'                 => 'required',
            'heure_debut'           => 'required',
            'heure_fin'             => 'required|after_or_equal:heure_debut',
            'adresse'               => 'required|string',
            'ville'                 => 'required|string',
            'code_postal'           => 'required|string',
            'infos'                 => 'required',
            'niveau'                => 'required|numeric',
            'nb_max_participants'   => 'required|numeric|integer|min:1',
            'prix'                  => 'required|numeric|integer|min:1',

        ];

        $validator = Validator::make($values, $rules, [
            'sport_id.required'             => 'un sport doit être choisi',
            'date.required'                 => 'une date doit doit être renseignée',
            'date.after_or_equal:today'     => 'une date égale ou supérieure doit doit être renseignée',
            'titre.required'                => 'indiquez un titre à la session',
            'heure_debut.required'          => 'une heure de début doit être renseignée',
            'heure_fin.required'            => 'une heure de fin doit être renseignée',
            'heure_fin.after_or_equal'      => 'une heure de fin supérieure à l\'heure de début doit être renseignée',
            'adresse.required'              => 'une adresse est requise',
            'ville.required'                => 'une ville doit être renseignée',
            'code_postal.required'          => 'un code postal doit être renseigné',
            'infos'                         => 'indiquez une description de la session',
            'niveau.required'               => 'l\'indication du niveau de sport est requis',
            'nb_max_participants.required'  => 'le nombre maximum de participants est requis',
            'nb_max_participants.numeric'   => 'le champ doit comporter un chiffre',
            'nb_max_participants.integer'   => 'le nombre de participants doit être un entier',
            'nb_max_participants.min'       => 'le nombre de participants minimum doit être de 1',
            'prix.required'                 => 'le prix est requis',
            'prix.numeric'                  => 'indiquez une valeur numérique',
            'prix.integer'                  => 'indiquez un entier (prix rond)',
            'prix.min'                      => 'indiquez prix égal ou supérieur à 1',
        ]);

        //dd($validator);

        if($validator->fails()){



            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $session = Session::create([

            'auteur_id'             => $author->id,
            'sport_id'              => $values['sport_id'],
            'heure_debut'           => $values['heure_debut'],
            'heure_fin'             => $values['heure_fin'],
            'date'                  => $values['date'],
            'titre'                 => $values['titre'],
            'adresse'               => $values['adresse'],
            'ville'                 => $values['ville'],
            'code_postal'           => $values['code_postal'],
            'infos'                 =>$values['infos'],
            'niveau'                => $values['niveau'],
            'nb_max_participants'   => $values['nb_max_participants'],
            'prix'                  => $values['prix'],

        ]);

        return $session;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
      // dd($user);
        $sessionAuthor = Session::find($id)->auteur_id;
       // dd($sessionAuthor);
        $numeroSession = Session::find($id);
        // dd($sessionAuthor);
        if ($user->id === $sessionAuthor)

        {
            $sessionToDelete = Session::find($id);
            $sessionToDelete->delete();
        }
            return view ('users.coach.profil.index')->with('user', $user)->with('numeroSession', $numeroSession);
    }

}
