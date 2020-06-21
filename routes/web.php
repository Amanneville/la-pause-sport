<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// AUTH
Auth::routes();

// PAGE ACCUEIl
Route::get('/', 'HomeController@index')->name('home');
// Toutes les sessions, tous niveaux, tous sports + users non connectés
Route::get('/home', 'HomeController@index')->name('home');
//--------------------------------------------------------------------------

// Debugg déconnexion
Route::get('logout', 'Auth\LoginController@logout', function () {
    return view('home');
});

//--------------------------------------------------------------------------

// ADMIN

// Liste & gestion toutes les sessions existantes => view admin.sessions-list
Route::get('/admin-sessions', 'AdminPanelController@index');
// controller à créer
// Liste & gestion de tous les users  Route::get('/index'), A CREER

//--------------------------------------------------------------------------

// USERS
// Avatar
Route::middleware ('auth', 'verified')->group (function (){
    Route::resource ('image',
        'ImageController', [
            'only'=>['create', 'store', 'destroy', 'update']
        ]);
});

// users MEMBRE

// Modifier avatar => view users.avatar = incorporée dans view users.membre.profil.index
Route::post('profil', 'UserController@update_avatar');

// Profil membre => view users.membre.profil.index     VALIDATOR A CREER
Route::get('/profil', 'SessionController@index')->middleware('auth');

// Infos de la session du user inscrit => view users.session.show
Route::get('/mes-sessions/{id}', 'SessionsController@show')->middleware('auth');

// Formulaire de modification des infos personnelles membre
//Route::post('/modif-profil/{id}')

//inscription dans une session
Route::resource('inscription-session', 'SessionController')->middleware('auth');
//Désinscription session
Route::put('desinscription/{id}', 'SessionController@update')->name('desinscription.update')->middleware('auth');


// MESSAGE (tchat par session) en tant que membre
// Ajouter un message au tchat
Route::post('/mes-sessions/{id}', 'SessionController@store');
// Récupérer tous les messages du tchat
Route::post('/getMessages/{id}', 'SessionController@chat');

//--------------------------------------------------------------------------

// users COACH
// Profil coach => view users.membre.coach.index     CONTROLLER
Route::get('profil-coach', 'UserController@profilCoach');
// Modifier avatar => view users.avatar = incorporée dans view users.coach.profil.index
// Création d'une sessions sport => users.coach.create-session.index
Route::get('/session', 'SessionController@index')->name('creationSession');
Route::get('/session', 'CreateSessionController@index');
Route::post('/session', 'CreateSessionController@store');

//--------------------------------------------------------------------------

// SPORTS
// Affiche les informations de la session avant inscription
Route::get('/infos-session/{id}', 'SessionSportController@index')->middleware('auth');;

// MUSCULATION
// Affiche toutes les sessions du niveau de l'user connecté => sports.musculation.index
Route::get('/musculation', 'SessionSportController@musculationindex')->middleware('auth');
// YOGA
Route::get('/yoga', 'SessionSportController@yogaindex')->middleware('auth');
// RUNNING
Route::get('/running', 'SessionSportController@runningindex')->middleware('auth');
// FITNESS
Route::get('/fitness', 'SessionSportController@fitnessindex')->middleware('auth');
// Ajoute une session
//Route::post('/musculation', 'SessionListController@index');
//--------------------------------------------------------------------------

// Création d'une session coach
Route::get('/session', 'CreateSessionController@index');
Route::post('/session', 'CreateSessionController@store');

// Supprimer une session coach
Route::get('destroy-session/{id}', 'CreateSessionController@destroy');

// Mes sessions, je n'autorise que les users connectés
Route::get('/mes-sessions', 'SessionController@index')->middleware('auth');
Route::get('/mes-sessions/{id}', 'SessionController@show')->middleware('auth');

//post récup les infos du tchat
Route::post('/mes-sessions/{id}', 'SessionController@store');

//inscription dans une session membre
//Route::resource('inscription', 'User\SessionController')->middleware('auth');





