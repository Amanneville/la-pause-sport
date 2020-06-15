<?php

namespace App\Http\Middleware;

use App\RoleUser;
use Closure;
use Illuminate\Support\Facades\Auth;

class IsCoach
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) // la requête est interceptée (request) PUIS la couche suivante est exécutée
    {// $ request récupère = les éléments de la requete HTTP mais pas les informations de l'utilisateur (ex: auth);
/*
        $can = RoleUser::all();


         if (Auth::check()->id ==  ){// importer la classe auth


             return redirect ('home')->with(dd(Auth::user()->age));
         }
*/
        // on peut assigner un middleware de manière globale ou l'assigner à une route seulement (dans le Kernel)
        // puis il faut placer le middleware dans la route que l'on veut controler.
        return $next($request);
    }
}
