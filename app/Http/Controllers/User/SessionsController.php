<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
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

        return view('users.sessions.show')->with('session',$session);
    }
}